<?php

namespace App\Rabbit;

use OldSound\RabbitMqBundle\RabbitMq\ConsumerInterface;
use PhpAmqpLib\Message\AMQPMessage;

class MessageConsumer implements ConsumerInterface
{
    public function execute(AMQPMessage $msg)
    {
        $message = json_decode($msg->body, true);
        echo 'Processando mensagem:'.PHP_EOL;

        foreach ($message as $key => $value) {
           echo '   '.$key.':'.$value.PHP_EOL;
        }

        echo '------------------------------------------------'.PHP_EOL;
        
    }
}