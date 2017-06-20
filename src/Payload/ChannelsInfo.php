<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\ChannelsInfoPayload;
use CL\Slack\Transport\ApiClient;

class ChannelsInfo extends ChannelsInfoPayload
{
    protected $client;

    /**
     * Set the client.
     *
     * @param ApiClient $client
     */
    public function setClient(ApiClient &$client)
    {
        $this->client($client);
    }

    /**
     * Send.
     *
     * @return mixed.
     */
    public function send()
    {
        return $this->client->send($this);
    }
}
