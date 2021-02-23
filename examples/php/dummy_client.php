<?php
// php:generate protoc --proto_path=./../protos   --php_out=./   --grpc_out=./ --plugin=protoc-gen-grpc=./../../bins/opt/grpc_php_plugin ./../protos/helloworld.proto

require dirname(__FILE__).'/vendor/autoload.php';

@include_once dirname(__FILE__).'/Benchmark/DummyClient.php';
@include_once dirname(__FILE__).'/Benchmark/MapResponse.php';
@include_once dirname(__FILE__).'/Benchmark/MapRequest.php';
@include_once dirname(__FILE__).'/Benchmark/Elements.php';
@include_once dirname(__FILE__).'/Benchmark/Duration.php';
@include_once dirname(__FILE__).'/Benchmark/Distance.php';
@include_once dirname(__FILE__).'/GPBMetadata/Benchmark.php';


function dumpMap($name)
{
    $client = new Benchmark\DummyClient('localhost:50052', [
        'credentials' => Grpc\ChannelCredentials::createInsecure(),
    ]);
    $request = new Benchmark\MapRequest();
    $request->setName($name);
    list($reply, $status) = $client->GetMap($request)->wait();
    $start = microtime(true);
    $message = $reply->serializeToJsonString();
    $end = microtime(true);
    $exe_time = $end - $start ; // convert to milisecond

    return $message."- time execution : ". $exe_time;
}

$name = !empty($argv[1]) ? $argv[1] : 'world';
echo dumpMap($name)."\n";
