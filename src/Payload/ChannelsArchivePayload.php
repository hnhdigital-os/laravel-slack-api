<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\ChannelsArchivePayload as OriginalChannelsArchivePayload;
use CL\Slack\Payload\ChannelsArchivePayloadResponse;
use CL\Slack\Transport\ApiClient;

class ChannelsArchivePayload extends OriginalChannelsArchivePayload
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