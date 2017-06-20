<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\ChannelsInfoPayload as OriginalChannelsInfoPayload;
use CL\Slack\Payload\ChannelsInfoPayloadResponse;
use CL\Slack\Transport\ApiClient;

class ChannelsInfoPayload extends OriginalChannelsInfoPayload
{

    /**
     * Get or set the channel id.
     *
     * @param ApiClient $client
     */
    public function channelId($channelId = false)
    {
        if ($channelId === false) {
            return $this->getChannelId();
        }

        $this->setChannelId($channelId);

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