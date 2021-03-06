<?php

namespace Bluora\LaravelSlackApi;

use CL\Slack\Transport\ApiClient;

class SlackApi
{
    protected $client;
    protected $token;

    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct()
    {
        return $this->setAccessToken(env('SLACK_JONNEE_ACCESS_TOKEN'));
    }

    /**
     * Set or get the access token.
     *
     * @return Slack
     */
    public function accessToken()
    {
        if (func_num_args() == 0) {
            return $this->getAccessToken();
        }

        return $this->setAccessToken(func_get_arg(0));
    }

    /**
     * Get the access token.
     *
     * @return string
     */
    public function getAccessToken()
    {
        return $this->token;
    }

    /**
     * Get the access token.
     *
     * @param string $token
     *
     * @return string
     */
    public function setAccessToken($token)
    {
        $this->token = $token;
        $this->client = new ApiClient($this->token);

        return $this;
    }

    /**
     * Add request closure.
     *
     * @param Closure $closure
     *
     * @return void
     */
    public function addRequestListener($closure)
    {
        $this->client->addRequestListener($closure);

        return $this;
    }

    /**
     * Add response closure.
     *
     * @param Closure $closure
     *
     * @return void
     */
    public function addResponseListener($closure)
    {
        $this->client->addResponseListener($closure);

        return $this;
    }

    /**
     * Capture all calls.
     *
     * @param string $method_name
     * @param array  $arguments
     *
     * @return mixed
     */
    public function __call($method_name, $arguments)
    {
        foreach (['Payload', 'Model'] as $class_type) {
            $class_name = 'Bluora\\LaravelSlackApi\\'.$class_type.'\\'.ucfirst($method_name);

            if ($class_type == 'Payload') {
                $class_name .= $class_type;
            }

            if (class_exists($class_name)) {
                $this->client->resetEndpoint();

                return new $class_name();
            }
        }

        throw new \Exception('That payload does not exist.');
    }

    /**
     * Set or get if we're logging when response is not ok.
     *
     * @return self|bool
     */
    public function logNotOk()
    {
        if (func_num_args() == 0) {
            return $this->client->getLogNotOk();
        }

        $this->client->setLogNotOk(func_get_arg(0));

        return $this;
    }

    /**
     * Set the endpoint for the client.
     *
     * @param string $endpoint
     *
     * @return self
     */
    public function endpoint($endpoint)
    {
        $this->client->setEndpoint($endpoint);

        return $this;
    }

    /**
     * Send the payload.
     *
     * @param mixed $payload
     *
     * @return mixed
     */
    public function send($payload)
    {
        return $this->client->send($payload);
    }
}
