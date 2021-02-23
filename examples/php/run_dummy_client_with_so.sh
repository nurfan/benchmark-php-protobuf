set -e
cd $(dirname $0)
php -d extension=grpc.so -d extension=protobuf.so -d max_execution_time=300 \
  dummy_client.php $1