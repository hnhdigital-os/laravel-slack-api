<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\GroupsUnarchivePayload as OriginalGroupsUnarchivePayload;
use CL\Slack\Payload\GroupsUnarchivePayloadResponse;

class GroupsUnarchivePayload extends OriginalGroupsUnarchivePayload
{

    /**
     * Get or set the group id.
     *
     * @param mixed $groupId
     */
    public function groupId()
    {
        if (func_num_args() == 0) {
            return $this->getGroupId();
        }

        $this->setGroupId(func_get_arg(0));

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
