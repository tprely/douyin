<?php
/**
 * AuthorizeV2Api
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
 * AuthorizeV2Api Class Doc Comment
 *
 * @category Class
 * @package  swagger_client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuthorizeV2Api
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
     * Operation oauthAuthorizeV2Get
     *
     * ???????????????(code)
     *
     * @param  string $client_key ?????????????????? (required)
     * @param  string $response_type ??????code (required)
     * @param  string $scope ???login_id (required)
     * @param  string $redirect_uri ??????????????????????????????????????????http/https?????????????????????????????????????????????????????????????????????????????????https://open.douyin.com/oauth/access_token/???token??? (required)
     * @param  string $state ??????????????????????????????????????????????????????????????????????????????,?????????App????????????????????? (optional)
     *
     * @throws swagger_client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function oauthAuthorizeV2Get($client_key, $response_type, $scope, $redirect_uri, $state = null)
    {
        $this->oauthAuthorizeV2GetWithHttpInfo($client_key, $response_type, $scope, $redirect_uri, $state);
    }

    /**
     * Operation oauthAuthorizeV2GetWithHttpInfo
     *
     * ???????????????(code)
     *
     * @param  string $client_key ?????????????????? (required)
     * @param  string $response_type ??????code (required)
     * @param  string $scope ???login_id (required)
     * @param  string $redirect_uri ??????????????????????????????????????????http/https?????????????????????????????????????????????????????????????????????????????????https://open.douyin.com/oauth/access_token/???token??? (required)
     * @param  string $state ??????????????????????????????????????????????????????????????????????????????,?????????App????????????????????? (optional)
     *
     * @throws swagger_client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function oauthAuthorizeV2GetWithHttpInfo($client_key, $response_type, $scope, $redirect_uri, $state = null)
    {
        $returnType = '';
        $request = $this->oauthAuthorizeV2GetRequest($client_key, $response_type, $scope, $redirect_uri, $state);

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation oauthAuthorizeV2GetAsync
     *
     * ???????????????(code)
     *
     * @param  string $client_key ?????????????????? (required)
     * @param  string $response_type ??????code (required)
     * @param  string $scope ???login_id (required)
     * @param  string $redirect_uri ??????????????????????????????????????????http/https?????????????????????????????????????????????????????????????????????????????????https://open.douyin.com/oauth/access_token/???token??? (required)
     * @param  string $state ??????????????????????????????????????????????????????????????????????????????,?????????App????????????????????? (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function oauthAuthorizeV2GetAsync($client_key, $response_type, $scope, $redirect_uri, $state = null)
    {
        return $this->oauthAuthorizeV2GetAsyncWithHttpInfo($client_key, $response_type, $scope, $redirect_uri, $state)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation oauthAuthorizeV2GetAsyncWithHttpInfo
     *
     * ???????????????(code)
     *
     * @param  string $client_key ?????????????????? (required)
     * @param  string $response_type ??????code (required)
     * @param  string $scope ???login_id (required)
     * @param  string $redirect_uri ??????????????????????????????????????????http/https?????????????????????????????????????????????????????????????????????????????????https://open.douyin.com/oauth/access_token/???token??? (required)
     * @param  string $state ??????????????????????????????????????????????????????????????????????????????,?????????App????????????????????? (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function oauthAuthorizeV2GetAsyncWithHttpInfo($client_key, $response_type, $scope, $redirect_uri, $state = null)
    {
        $returnType = '';
        $request = $this->oauthAuthorizeV2GetRequest($client_key, $response_type, $scope, $redirect_uri, $state);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'oauthAuthorizeV2Get'
     *
     * @param  string $client_key ?????????????????? (required)
     * @param  string $response_type ??????code (required)
     * @param  string $scope ???login_id (required)
     * @param  string $redirect_uri ??????????????????????????????????????????http/https?????????????????????????????????????????????????????????????????????????????????https://open.douyin.com/oauth/access_token/???token??? (required)
     * @param  string $state ??????????????????????????????????????????????????????????????????????????????,?????????App????????????????????? (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function oauthAuthorizeV2GetRequest($client_key, $response_type, $scope, $redirect_uri, $state = null)
    {
        // verify the required parameter 'client_key' is set
        if ($client_key === null || (is_array($client_key) && count($client_key) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $client_key when calling oauthAuthorizeV2Get'
            );
        }
        // verify the required parameter 'response_type' is set
        if ($response_type === null || (is_array($response_type) && count($response_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $response_type when calling oauthAuthorizeV2Get'
            );
        }
        // verify the required parameter 'scope' is set
        if ($scope === null || (is_array($scope) && count($scope) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $scope when calling oauthAuthorizeV2Get'
            );
        }
        // verify the required parameter 'redirect_uri' is set
        if ($redirect_uri === null || (is_array($redirect_uri) && count($redirect_uri) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $redirect_uri when calling oauthAuthorizeV2Get'
            );
        }

        $resourcePath = '/oauth/authorize/v2/';
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
        if ($response_type !== null) {
            $queryParams['response_type'] = ObjectSerializer::toQueryValue($response_type);
        }
        // query params
        if ($scope !== null) {
            $queryParams['scope'] = ObjectSerializer::toQueryValue($scope);
        }
        // query params
        if ($redirect_uri !== null) {
            $queryParams['redirect_uri'] = ObjectSerializer::toQueryValue($redirect_uri);
        }
        // query params
        if ($state !== null) {
            $queryParams['state'] = ObjectSerializer::toQueryValue($state);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
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
