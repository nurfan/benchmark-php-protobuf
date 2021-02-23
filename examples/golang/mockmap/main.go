package main

import (
	"context"
	"log"
	"net"
	"strings"

	pb "mockmap/proto"

	"github.com/gogo/protobuf/jsonpb"
	"google.golang.org/grpc"
)

const (
	port = ":50052"
)

type Map struct {
	DestinationAddresses []string `json:"destination_addresses"`
	OriginAddresses      []string `json:"origin_addresses"`
	Elements             []struct {
		Distance struct {
			Text  string `json:"text"`
			Value int64  `json:"value"`
		} `json:"distance"`
		Duration struct {
			Text  string `json:"text"`
			Value int64  `json:"value"`
		} `json:"duration"`
		Status string `json:"status"`
	} `json:"elements"`
	Status string `json:"status"`
}

type server struct {
}

func (s *server) GetMap(ctx context.Context, in *pb.MapRequest) (*pb.MapResponse, error) {
	var resp pb.MapResponse
	js := `{"destination_addresses":["Washington, DC, USA","Philadelphia, PA, USA","Santa Barbara, CA, USA","Miami, FL, USA","Austin, TX, USA","Napa County, CA, USA"],"origin_addresses":["New York, NY, USA"],"elements":[{"distance":{"text":"227 mi","value":365468},"duration":{"text":"3 hours 54 mins","value":14064},"status":"OK"},{"distance":{"text":"94.6 mi","value":152193},"duration":{"text":"1 hour 44 mins","value":6227},"status":"OK"},{"distance":{"text":"2,878 mi","value":4632197},"duration":{"text":"1 day 18 hours","value":151772},"status":"OK"},{"distance":{"text":"1,286 mi","value":2069031},"duration":{"text":"18 hours 43 mins","value":67405},"status":"OK"},{"distance":{"text":"1,742 mi","value":2802972},"duration":{"text":"1 day 2 hours","value":93070},"status":"OK"},{"distance":{"text":"2,871 mi","value":4620514},"duration":{"text":"1 day 18 hours","value":152913},"status":"OK"}],"status":"OK"}`

	if err := jsonpb.Unmarshal(strings.NewReader(js), &resp); err != nil {
		log.Fatalln("Error converting JSON to proto:", err)
	}

	return &resp, nil
}

func main() {
	lis, err := net.Listen("tcp", port)
	if err != nil {
		log.Fatalf("failed to listen: %v", err)
	}
	s := grpc.NewServer()
	pb.RegisterDummyServer(s, &server{})
	if err := s.Serve(lis); err != nil {
		log.Fatalf("failed to serve: %v", err)
	}
}
