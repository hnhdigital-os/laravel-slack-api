<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\GroupsCreateChildPayload as OriginalGroupsCreateChildPayload;
use CL\Slack\Payload\GroupsCreateChildPayloadResponse;
use CL\Slack\Transport\ApiClient;

class GroupsCreateChildPayload extends OriginalGroupsCreateChildPayload
{

    /**
     * Get or set the group id.
     *
     * @param ApiClient $client
     */
    public function groupId($groupId = false)
    {
        if ($groupId === false) {
            return $this->getGroupId();
        }

        $this->setGroupId($groupId);

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