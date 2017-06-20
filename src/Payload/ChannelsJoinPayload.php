<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\ChannelsJoinPayload as OriginalChannelsJoinPayload;
use CL\Slack\Payload\ChannelsJoinPayloadResponse;
use CL\Slack\Transport\ApiClient;

class ChannelsJoinPayload extends OriginalChannelsJoinPayload
{

    /**
     * Get or set the name.
     *
     * @param ApiClient $client
     */
    public function name($name = false)
    {
        if ($name === false) {
            return $this->getName();
        }

        $this->setName($name);

        return $this;
    }

    /**
     * Send.
     *
     * @return mixed.
     */
    public function send()
    {
        global $app;

        return $app['bluora.slackapi']->send($this);
    }
}