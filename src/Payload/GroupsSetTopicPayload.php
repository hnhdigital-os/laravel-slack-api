<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\GroupsSetTopicPayload as OriginalGroupsSetTopicPayload;
use CL\Slack\Payload\GroupsSetTopicPayloadResponse;
use CL\Slack\Transport\ApiClient;

class GroupsSetTopicPayload extends OriginalGroupsSetTopicPayload
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
     * Get or set the topic.
     *
     * @param ApiClient $client
     */
    public function topic($topic = false)
    {
        if ($topic === false) {
            return $this->getTopic();
        }

        $this->setTopic($topic);

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