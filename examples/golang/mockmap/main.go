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

func (s *server) StreamPost(ctx context.Context, in *pb.StreamPostRequest) (*pb.StreamPostResponse, error) {
	var resp pb.StreamPostResponse
	js := `{"message":"20 stream post(s) retrieved","data":[{"postid":5795221,"titleurl":"","title":"","content":"[%kBtm%] pantas [%QmQh%] di akumulasi.\nbatu bara bakal meroket kayaknya.\n[%DOBj%] [%FlTT%] [%okHG%]","content_original":"$IHSG pantas $BIPI di akumulasi.\nbatu bara bakal meroket kayaknya.\n$PTBA $ADRO $HRUM","created":"2021-02-24 08:45:55","created_display":"24 Feb 21, 08:45","updated":"0000-00-00 00:00:00","userid":240111,"is_author":0,"username":"Valhala82","fullname":"draqulia","avatar":"stockbit161055374690120210113T230226androidIMG_20210113_152324.jpg","official":0,"user_priv":0,"ispro":0,"ispinned":0,"trending":0,"replies":"1","noreply":0,"likes":3,"dislikes":0,"reposted":0,"repostedfrom":null,"liked":0,"likers":"","saved":0,"images":["https://stockbit.s3.amazonaws.com/stockbit161413115443420210224T084554androidIMG_20210224_084326.jpg"],"polling":[],"attachment":[],"parent_postid":5795221,"disliked":0,"follow":0,"reports":[],"newsfeed_source":"","newsfeed_label":"","newsfeed_img":"","linkpreview":null,"tradeshare":null,"total_share":"0","target_price":[],"analytics":{"impression":31,"engagement":{"like":3,"reply":1,"share":0,"profile_view":0,"media_click":0}},"country":null,"last_reply_date":1614134275,"isnews":0,"isreport":0,"topics":["IHSG","BIPI","PTBA","ADRO","HRUM"],"ischart":0,"last_reply":{"postid":5796181,"avatar":"placeholders/P.png","content":"ga capek apa ngurusin saham gocap terus :rofl:","content_original":"ga capek apa ngurusin saham gocap terus :rofl:","created":"2021-02-24 09:37:55","created_display":"24 Feb 21, 09:37","username":"PradiptaWijaya","fullname":"Investor Bacot","titleurl":null,"title":null,"official":0,"ispro":0,"ispinned":0,"trending":0,"replies":"13","likes":0,"dislikes":0,"reposted":0,"repostedfrom":null,"liked":0,"likers":"","saved":0,"images":[],"attachment":[],"parent_postid":0,"disliked":0,"follow":0,"newsfeed_source":"","newsfeed_label":"","newsfeed_img":"","linkpreview":null,"tradeshare":null,"total_share":"0","target_price":[],"country":null,"last_reply_date":null,"isnews":0,"isreport":0,"topics":[],"last_reply":null,"mask_html":{}},"mask_html":{"kBtm":{"tag":"a","attr":{"class":"stock-indicator","data_company":"IHSG","href":"symbol/IHSG","target":"_blank"},"text":"$IHSG"},"QmQh":{"tag":"a","attr":{"class":"stock-indicator","data_company":"BIPI","href":"symbol/BIPI","target":"_blank"},"text":"$BIPI"},"DOBj":{"tag":"a","attr":{"class":"stock-indicator","data_company":"PTBA","href":"symbol/PTBA","target":"_blank"},"text":"$PTBA"},"FlTT":{"tag":"a","attr":{"class":"stock-indicator","data_company":"ADRO","href":"symbol/ADRO","target":"_blank"},"text":"$ADRO"},"okHG":{"tag":"a","attr":{"class":"stock-indicator","data_company":"HRUM","href":"symbol/HRUM","target":"_blank"},"text":"$HRUM"}}}]}`

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
