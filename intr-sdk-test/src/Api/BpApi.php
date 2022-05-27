<?php
/**
 * BpApi
 * PHP version 5
 *
 * @category Class
 * @package  Introvert
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * INTROVERT API
 *
 * No descripton provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Introvert\Api;

use \Introvert\ApiClient;
use \Introvert\ApiException;
use \Introvert\Configuration;
use \Introvert\ObjectSerializer;

/**
 * BpApi Class Doc Comment
 *
 * @category Class
 * @package  Introvert
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BpApi
{
    /**
     * API Client
     *
     * @var \Introvert\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Introvert\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Introvert\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://test.api.yadrocrm.ru/tmp');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Introvert\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Introvert\ApiClient $apiClient set the API client
     *
     * @return BpApi
     */
    public function setApiClient(\Introvert\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getTemplates
     *
     * Возвращает шаблоны БП2.0
     *
     * @throws \Introvert\ApiException on non-2xx response
     * @return \Introvert\Model\BPTemplate | array
     */
    public function getTemplates()
    {
        list($response) = $this->getTemplatesWithHttpInfo();
        return $response;
    }

    /**
     * Operation getTemplatesWithHttpInfo
     *
     * Возвращает шаблоны БП2.0
     *
     * @throws \Introvert\ApiException on non-2xx response
     * @return array of \Introvert\Model\BPTemplate, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTemplatesWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/bp/getTemplates";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('key');
        if (strlen($apiKey) !== 0) {
            $queryParams['key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Introvert\Model\BPTemplate',
                '/bp/getTemplates'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Introvert\Model\BPTemplate', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Introvert\Model\BPTemplate', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getTemplatesByTasksId
     *
     * Возвращает id шаблонов БП2.0 по id задач
     *
     * @param int[] $id id задач (optional)
     * @throws \Introvert\ApiException on non-2xx response
     * @return object | array
     */
    public function getTemplatesByTasksId($id = null)
    {
        list($response) = $this->getTemplatesByTasksIdWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation getTemplatesByTasksIdWithHttpInfo
     *
     * Возвращает id шаблонов БП2.0 по id задач
     *
     * @param int[] $id id задач (optional)
     * @throws \Introvert\ApiException on non-2xx response
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTemplatesByTasksIdWithHttpInfo($id = null)
    {
        // parse inputs
        $resourcePath = "/bp/getTemplatesByTasksId";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($id !== null) {
            $queryParams['id'] = $id; //$this->apiClient->getSerializer()->serializeCollection($id, 'multi', true);
        }

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('key');
        if (strlen($apiKey) !== 0) {
            $queryParams['key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                'object',
                '/bp/getTemplatesByTasksId'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'object', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
