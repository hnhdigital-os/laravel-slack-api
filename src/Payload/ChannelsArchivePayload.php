<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\ChannelsArchivePayload as OriginalChannelsArchivePayload;
use CL\Slack\Payload\ChannelsArchivePayloadResponse;

class ChannelsArchivePayload extends OriginalChannelsArchivePayload
{

    /**
     * Get or set the channel id.
     *
     * @param mixed $channelId
     */
    public function channelId()
    {
        if (func_num_args() == 0) {
            return $this->getChannelId();
        }

        $this->setChannelId(func_get_arg(0));

        return $this;
    }

    /**
     * Set the endpoint.
     *
     * @return mixed.
     */
    public function endpoint($endpoint)
    {
        global $app;

        $app['bluora.slackapi']->endpoint($endpoint);

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
