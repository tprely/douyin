<?php
/**
 * ToutiaoClientTokenApi
 * PHP version 5
 *
 * @category Class
 * @package  swagger_client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.20
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace swagger_client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use swagger_client\ApiException;
use swagger_client\Configuration;
use swagger_client\HeaderSelector;
use swagger_client\ObjectSerializer;

/**
 * ToutiaoClientTokenApi Class Doc Comment
 *
 * @category Class
 * @package  swagger_client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ToutiaoClientTokenApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation oauthClientTokenGet
     *
     * 生成client_token
     *
     * @param  string $client_key 应用唯一标识 (required)
     * @param  string $client_secret 应用唯一标识对应的密钥 (required)
     * @param  string $grant_type 传client_credential (required)
     *
     * @throws swagger_client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \swagger_client\Model\ToutiaoOauth2Oauth2InlineResponse2002
     */
    public function oauthClientTokenGet($client_key, $client_secret, $grant_type)
    {
        list($response) = $this->oauthClientTokenGetWithHttpInfo($client_key, $client_secret, $grant_type);
        return $response;
    }

    /**
     * Operation oauthClientTokenGetWithHttpInfo
     *
     * 生成client_token
     *
     * @param  string $client_key 应用唯一标识 (required)
     * @param  string $client_secret 应用唯一标识对应的密钥 (required)
     * @param  string $grant_type 传client_credential (required)
     *
     * @throws swagger_client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \swagger_client\Model\ToutiaoOauth2Oauth2InlineResponse2002, HTTP status code, HTTP response headers (array of strings)
     */
    public function oauthClientTokenGetWithHttpInfo($client_key, $client_secret, $grant_type)
    {
        $returnType = '\swagger_client\Model\ToutiaoOauth2Oauth2InlineResponse2002';
        $request = $this->oauthClientTokenGetRequest($client_key, $client_secret, $grant_type);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\swagger_client\Model\ToutiaoOauth2Oauth2InlineResponse2002',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation oauthClientTokenGetAsync
     *
     * 生成client_token
     *
     * @param  string $client_key 应用唯一标识 (required)
     * @param  string $client_secret 应用唯一标识对应的密钥 (required)
     * @param  string $grant_type 传client_credential (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function oauthClientTokenGetAsync($client_key, $client_secret, $grant_type)
    {
        return $this->oauthClientTokenGetAsyncWithHttpInfo($client_key, $client_secret, $grant_type)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation oauthClientTokenGetAsyncWithHttpInfo
     *
     * 生成client_token
     *
     * @param  string $client_key 应用唯一标识 (required)
     * @param  string $client_secret 应用唯一标识对应的密钥 (required)
     * @param  string $grant_type 传client_credential (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function oauthClientTokenGetAsyncWithHttpInfo($client_key, $client_secret, $grant_type)
    {
        $returnType = '\swagger_client\Model\ToutiaoOauth2Oauth2InlineResponse2002';
        $request = $this->oauthClientTokenGetRequest($client_key, $client_secret, $grant_type);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'oauthClientTokenGet'
     *
     * @param  string $client_key 应用唯一标识 (required)
     * @param  string $client_secret 应用唯一标识对应的密钥 (required)
     * @param  string $grant_type 传client_credential (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function oauthClientTokenGetRequest($client_key, $client_secret, $grant_type)
    {
        // verify the required parameter 'client_key' is set
        if ($client_key === null || (is_array($client_key) && count($client_key) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $client_key when calling oauthClientTokenGet'
            );
        }
        // verify the required parameter 'client_secret' is set
        if ($client_secret === null || (is_array($client_secret) && count($client_secret) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $client_secret when calling oauthClientTokenGet'
            );
        }
        // verify the required parameter 'grant_type' is set
        if ($grant_type === null || (is_array($grant_type) && count($grant_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $grant_type when calling oauthClientTokenGet'
            );
        }

        $resourcePath = '/oauth/client_token/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($client_key !== null) {
            $queryParams['client_key'] = ObjectSerializer::toQueryValue($client_key);
        }
        // query params
        if ($client_secret !== null) {
            $queryParams['client_secret'] = ObjectSerializer::toQueryValue($client_secret);
        }
        // query params
        if ($grant_type !== null) {
            $queryParams['grant_type'] = ObjectSerializer::toQueryValue($grant_type);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
