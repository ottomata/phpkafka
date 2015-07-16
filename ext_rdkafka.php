<?php

<<__NativeData("ZendCompat")>> class Kafka {

    <<__Native("ZendCompat")>> function __construct(mixed $brokers, mixed $options): mixed;

    <<__Native("ZendCompat")>> function set_partition(mixed $partition, mixed $mode): mixed;

    <<__Native("ZendCompat")>> function setPartition(mixed $partition, mixed $mode): mixed;

    <<__Native("ZendCompat")>> function setOptions(mixed $options): mixed;

    <<__Native("ZendCompat")>> function setCompression(mixed $compression): mixed;

    <<__Native("ZendCompat")>> function getCompression(): mixed;

    <<__Native("ZendCompat")>> function getPartition(mixed $mode): mixed;

    <<__Native("ZendCompat")>> function setLogLevel(mixed $level): mixed;

    <<__Native("ZendCompat")>> function setBrokers(mixed $brokers, mixed $options): mixed;

    <<__Native("ZendCompat")>> function isConnected(mixed $mode): mixed;

    <<__Native("ZendCompat")>> function produce(mixed $topic, mixed $message): mixed;

    <<__Native("ZendCompat")>> function produceBatch(mixed $topic, mixed $messages): mixed;

    <<__Native("ZendCompat")>> function consume(mixed $topic, mixed $offset, mixed $count): mixed;

    <<__Native("ZendCompat")>> function getTopics(): mixed;

    <<__Native("ZendCompat")>> function disconnect(mixed $mode): mixed;

    <<__Native("ZendCompat")>> function getPartitionsForTopic(mixed $topic): mixed;

    <<__Native("ZendCompat")>> function getPartitionOffsets(mixed $topic): mixed;

    <<__Native("ZendCompat")>> function __destruct(): mixed;
}

<<__NativeData("ZendCompat")>> class KafkaException extends Exception {}
