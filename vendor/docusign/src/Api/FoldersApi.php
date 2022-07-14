<?php
declare(strict_types=1);

/**
 * FoldersApi.
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DocuSign REST API
 *
 * The DocuSign REST API provides you with a powerful, convenient, and simple Web services API for interacting with DocuSign.
 *
 * OpenAPI spec version: v2.1
 * Contact: devcenter@docusign.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.21-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

 /**
 * Sugar customizations had to be made in order to make the functionality work with PHP 7.3
 * null coalesce 
 * typed properties
 */


namespace DocuSign\eSign\Api\FoldersApi;


class ListOptions
{
    /**
      * $include 
      * @var ?string
      */
    protected $include = null;

    /**
     * Gets include
     * @return ?string
     */
    public function getInclude(): ?string
    {
        return $this->include;
    }

    /**
     * Sets include
     * @param ?string $include 
     * @return self
     */
    public function setInclude(?string $include): self
    {
        $this->include = $include;
        return $this;
    }
    /**
      * $include_items 
      * @var ?string
      */
    protected $include_items = null;

    /**
     * Gets include_items
     * @return ?string
     */
    public function getIncludeItems(): ?string
    {
        return $this->include_items;
    }

    /**
     * Sets include_items
     * @param ?string $include_items 
     * @return self
     */
    public function setIncludeItems(?string $include_items): self
    {
        $this->include_items = $include_items;
        return $this;
    }
    /**
      * $start_position 
      * @var ?string
      */
    protected $start_position = null;

    /**
     * Gets start_position
     * @return ?string
     */
    public function getStartPosition(): ?string
    {
        return $this->start_position;
    }

    /**
     * Sets start_position
     * @param ?string $start_position 
     * @return self
     */
    public function setStartPosition(?string $start_position): self
    {
        $this->start_position = $start_position;
        return $this;
    }
    /**
      * $template Specifies the items that are returned. Valid values are:   * include - The folder list will return normal folders plus template folders.  * only - Only the list of template folders are returned.
      * @var ?string
      */
    protected $template = null;

    /**
     * Gets template
     * @return ?string
     */
    public function getTemplate(): ?string
    {
        return $this->template;
    }

    /**
     * Sets template
     * @param ?string $template Specifies the items that are returned. Valid values are:   * include - The folder list will return normal folders plus template folders.  * only - Only the list of template folders are returned.
     * @return self
     */
    public function setTemplate(?string $template): self
    {
        $this->template = $template;
        return $this;
    }
    /**
      * $user_filter 
      * @var ?string
      */
    protected $user_filter = null;

    /**
     * Gets user_filter
     * @return ?string
     */
    public function getUserFilter(): ?string
    {
        return $this->user_filter;
    }

    /**
     * Sets user_filter
     * @param ?string $user_filter 
     * @return self
     */
    public function setUserFilter(?string $user_filter): self
    {
        $this->user_filter = $user_filter;
        return $this;
    }
}


class ListItemsOptions
{
    /**
      * $from_date Only return items on or after this date. If no value is provided, the default search is the previous 30 days.
      * @var ?string
      */
    protected $from_date = null;

    /**
     * Gets from_date
     * @return ?string
     */
    public function getFromDate(): ?string
    {
        return $this->from_date;
    }

    /**
     * Sets from_date
     * @param ?string $from_date Only return items on or after this date. If no value is provided, the default search is the previous 30 days.
     * @return self
     */
    public function setFromDate(?string $from_date): self
    {
        $this->from_date = $from_date;
        return $this;
    }
    /**
      * $include_items 
      * @var ?string
      */
    protected $include_items = null;

    /**
     * Gets include_items
     * @return ?string
     */
    public function getIncludeItems(): ?string
    {
        return $this->include_items;
    }

    /**
     * Sets include_items
     * @param ?string $include_items 
     * @return self
     */
    public function setIncludeItems(?string $include_items): self
    {
        $this->include_items = $include_items;
        return $this;
    }
    /**
      * $owner_email The email of the folder owner.
      * @var ?string
      */
    protected $owner_email = null;

    /**
     * Gets owner_email
     * @return ?string
     */
    public function getOwnerEmail(): ?string
    {
        return $this->owner_email;
    }

    /**
     * Sets owner_email
     * @param ?string $owner_email The email of the folder owner.
     * @return self
     */
    public function setOwnerEmail(?string $owner_email): self
    {
        $this->owner_email = $owner_email;
        return $this;
    }
    /**
      * $owner_name The name of the folder owner.
      * @var ?string
      */
    protected $owner_name = null;

    /**
     * Gets owner_name
     * @return ?string
     */
    public function getOwnerName(): ?string
    {
        return $this->owner_name;
    }

    /**
     * Sets owner_name
     * @param ?string $owner_name The name of the folder owner.
     * @return self
     */
    public function setOwnerName(?string $owner_name): self
    {
        $this->owner_name = $owner_name;
        return $this;
    }
    /**
      * $search_text The search text used to search the items of the envelope. The search looks at recipient names and emails, envelope custom fields, sender name, and subject.
      * @var ?string
      */
    protected $search_text = null;

    /**
     * Gets search_text
     * @return ?string
     */
    public function getSearchText(): ?string
    {
        return $this->search_text;
    }

    /**
     * Sets search_text
     * @param ?string $search_text The search text used to search the items of the envelope. The search looks at recipient names and emails, envelope custom fields, sender name, and subject.
     * @return self
     */
    public function setSearchText(?string $search_text): self
    {
        $this->search_text = $search_text;
        return $this;
    }
    /**
      * $start_position The position of the folder items to return. This is used for repeated calls, when the number of envelopes returned is too much for one return (calls return 100 envelopes at a time). The default value is 0.
      * @var ?string
      */
    protected $start_position = null;

    /**
     * Gets start_position
     * @return ?string
     */
    public function getStartPosition(): ?string
    {
        return $this->start_position;
    }

    /**
     * Sets start_position
     * @param ?string $start_position The position of the folder items to return. This is used for repeated calls, when the number of envelopes returned is too much for one return (calls return 100 envelopes at a time). The default value is 0.
     * @return self
     */
    public function setStartPosition(?string $start_position): self
    {
        $this->start_position = $start_position;
        return $this;
    }
    /**
      * $status The current status of the envelope. If no value is provided, the default search is all/any status.
      * @var ?string
      */
    protected $status = null;

    /**
     * Gets status
     * @return ?string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets status
     * @param ?string $status The current status of the envelope. If no value is provided, the default search is all/any status.
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }
    /**
      * $to_date Only return items up to this date. If no value is provided, the default search is to the current date.
      * @var ?string
      */
    protected $to_date = null;

    /**
     * Gets to_date
     * @return ?string
     */
    public function getToDate(): ?string
    {
        return $this->to_date;
    }

    /**
     * Sets to_date
     * @param ?string $to_date Only return items up to this date. If no value is provided, the default search is to the current date.
     * @return self
     */
    public function setToDate(?string $to_date): self
    {
        $this->to_date = $to_date;
        return $this;
    }
}


class SearchOptions
{
    /**
      * $all Specifies that all envelopes that match the criteria are returned.
      * @var ?string
      */
    protected $all = null;

    /**
     * Gets all
     * @return ?string
     */
    public function getAll(): ?string
    {
        return $this->all;
    }

    /**
     * Sets all
     * @param ?string $all Specifies that all envelopes that match the criteria are returned.
     * @return self
     */
    public function setAll(?string $all): self
    {
        $this->all = $all;
        return $this;
    }
    /**
      * $count Specifies the number of records returned in the cache. The number must be greater than 0 and less than or equal to 100.
      * @var ?string
      */
    protected $count = null;

    /**
     * Gets count
     * @return ?string
     */
    public function getCount(): ?string
    {
        return $this->count;
    }

    /**
     * Sets count
     * @param ?string $count Specifies the number of records returned in the cache. The number must be greater than 0 and less than or equal to 100.
     * @return self
     */
    public function setCount(?string $count): self
    {
        $this->count = $count;
        return $this;
    }
    /**
      * $from_date Specifies the start of the date range to return. If no value is provided, the default search is the previous 30 days.
      * @var ?string
      */
    protected $from_date = null;

    /**
     * Gets from_date
     * @return ?string
     */
    public function getFromDate(): ?string
    {
        return $this->from_date;
    }

    /**
     * Sets from_date
     * @param ?string $from_date Specifies the start of the date range to return. If no value is provided, the default search is the previous 30 days.
     * @return self
     */
    public function setFromDate(?string $from_date): self
    {
        $this->from_date = $from_date;
        return $this;
    }
    /**
      * $include_recipients When set to **true**, the recipient information is returned in the response.
      * @var ?string
      */
    protected $include_recipients = null;

    /**
     * Gets include_recipients
     * @return ?string
     */
    public function getIncludeRecipients(): ?string
    {
        return $this->include_recipients;
    }

    /**
     * Sets include_recipients
     * @param ?string $include_recipients When set to **true**, the recipient information is returned in the response.
     * @return self
     */
    public function setIncludeRecipients(?string $include_recipients): self
    {
        $this->include_recipients = $include_recipients;
        return $this;
    }
    /**
      * $order Specifies the order in which the list is returned. Valid values are: `asc` for ascending order, and `desc` for descending order.
      * @var ?string
      */
    protected $order = null;

    /**
     * Gets order
     * @return ?string
     */
    public function getOrder(): ?string
    {
        return $this->order;
    }

    /**
     * Sets order
     * @param ?string $order Specifies the order in which the list is returned. Valid values are: `asc` for ascending order, and `desc` for descending order.
     * @return self
     */
    public function setOrder(?string $order): self
    {
        $this->order = $order;
        return $this;
    }
    /**
      * $order_by Specifies the property used to sort the list. Valid values are: `action_required`, `created`, `completed`, `sent`, `signer_list`, `status`, or `subject`.
      * @var ?string
      */
    protected $order_by = null;

    /**
     * Gets order_by
     * @return ?string
     */
    public function getOrderBy(): ?string
    {
        return $this->order_by;
    }

    /**
     * Sets order_by
     * @param ?string $order_by Specifies the property used to sort the list. Valid values are: `action_required`, `created`, `completed`, `sent`, `signer_list`, `status`, or `subject`.
     * @return self
     */
    public function setOrderBy(?string $order_by): self
    {
        $this->order_by = $order_by;
        return $this;
    }
    /**
      * $start_position Specifies the the starting location in the result set of the items that are returned.
      * @var ?string
      */
    protected $start_position = null;

    /**
     * Gets start_position
     * @return ?string
     */
    public function getStartPosition(): ?string
    {
        return $this->start_position;
    }

    /**
     * Sets start_position
     * @param ?string $start_position Specifies the the starting location in the result set of the items that are returned.
     * @return self
     */
    public function setStartPosition(?string $start_position): self
    {
        $this->start_position = $start_position;
        return $this;
    }
    /**
      * $to_date Specifies the end of the date range to return.
      * @var ?string
      */
    protected $to_date = null;

    /**
     * Gets to_date
     * @return ?string
     */
    public function getToDate(): ?string
    {
        return $this->to_date;
    }

    /**
     * Sets to_date
     * @param ?string $to_date Specifies the end of the date range to return.
     * @return self
     */
    public function setToDate(?string $to_date): self
    {
        $this->to_date = $to_date;
        return $this;
    }
}



namespace DocuSign\eSign\Api;

use DocuSign\eSign\Client\ApiClient;
use DocuSign\eSign\Client\ApiException;
use DocuSign\eSign\Configuration;
use DocuSign\eSign\ObjectSerializer;

/**
 * FoldersApi Class Doc Comment
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FoldersApi
{
    /**
     * API Client
     *
     * @var ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param ApiClient|null $apiClient The api client to use
     * @return void
     */
    public function __construct(ApiClient $apiClient = null)
    {
        $this->apiClient = $apiClient ?? new ApiClient();
    }

    /**
     * Get API client
     *
     * @return ApiClient get the API client
     */
    public function getApiClient(): ApiClient
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param ApiClient $apiClient set the API client
     *
     * @return self
     */
    public function setApiClient(ApiClient $apiClient): self
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
    * Update $resourcePath with $
    *
    * @param string $resourcePath
    * @param string $baseName
    * @param string $paramName
    *
    * @return string
    */
    public function updateResourcePath(string $resourcePath, string $baseName, string $paramName): string
    {
        return str_replace(
            "{" . $baseName . "}",
            $this->apiClient->getSerializer()->toPathValue($paramName),
            $resourcePath
        );
    }


    /**
     * Operation callList
     *
     * Gets a list of the folders for the account.
     *
     * @param ?string $account_id The external account number (int) or account ID Guid.
     * @param  \DocuSign\eSign\Api\FoldersApi\ListOptions for modifying the behavior of the function. (optional)
     * @throws ApiException on non-2xx response
     * @return \DocuSign\eSign\Model\FoldersResponse
     */
    public function callList($account_id, \DocuSign\eSign\Api\FoldersApi\ListOptions $options = null)
    {
        list($response) = $this->callListWithHttpInfo($account_id, $options);
        return $response;
    }

    /**
     * Operation callListWithHttpInfo
     *
     * Gets a list of the folders for the account.
     *
     * @param ?string $account_id The external account number (int) or account ID Guid.
     * @param  \DocuSign\eSign\Api\FoldersApi\ListOptions for modifying the behavior of the function. (optional)
     * @throws ApiException on non-2xx response
     * @return array of \DocuSign\eSign\Model\FoldersResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function callListWithHttpInfo($account_id, \DocuSign\eSign\Api\FoldersApi\ListOptions $options = null): array
    {
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling callList');
        }
        // parse inputs
        $resourcePath = "/v2.1/accounts/{accountId}/folders";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] = isset($headerParams['Accept']) ? $headerParams['Accept'] : $this->apiClient->selectHeaderAccept(['application/json']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        if ($options != null)
        {
            // query params
            if ($options->getInclude() != 'null') {
                $queryParams['include'] = $this->apiClient->getSerializer()->toQueryValue($options->getInclude());
            }
            if ($options->getIncludeItems() != 'null') {
                $queryParams['include_items'] = $this->apiClient->getSerializer()->toQueryValue($options->getIncludeItems());
            }
            if ($options->getStartPosition() != 'null') {
                $queryParams['start_position'] = $this->apiClient->getSerializer()->toQueryValue($options->getStartPosition());
            }
            if ($options->getTemplate() != 'null') {
                $queryParams['template'] = $this->apiClient->getSerializer()->toQueryValue($options->getTemplate());
            }
            if ($options->getUserFilter() != 'null') {
                $queryParams['user_filter'] = $this->apiClient->getSerializer()->toQueryValue($options->getUserFilter());
            }
        }

        // path params
        if ($account_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "accountId", $account_id);
        }

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\DocuSign\eSign\Model\FoldersResponse',
                '/v2.1/accounts/{accountId}/folders'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\DocuSign\eSign\Model\FoldersResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\FoldersResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\ErrorDetails', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation listItems
     *
     * Gets a list of the envelopes in the specified folder.
     *
     * @param ?string $account_id The external account number (int) or account ID Guid.
     * @param ?string $folder_id The ID of the folder being accessed.
     * @param  \DocuSign\eSign\Api\FoldersApi\ListItemsOptions for modifying the behavior of the function. (optional)
     * @throws ApiException on non-2xx response
     * @return \DocuSign\eSign\Model\FolderItemsResponse
     */
    public function listItems($account_id, $folder_id, \DocuSign\eSign\Api\FoldersApi\ListItemsOptions $options = null)
    {
        list($response) = $this->listItemsWithHttpInfo($account_id, $folder_id, $options);
        return $response;
    }

    /**
     * Operation listItemsWithHttpInfo
     *
     * Gets a list of the envelopes in the specified folder.
     *
     * @param ?string $account_id The external account number (int) or account ID Guid.
     * @param ?string $folder_id The ID of the folder being accessed.
     * @param  \DocuSign\eSign\Api\FoldersApi\ListItemsOptions for modifying the behavior of the function. (optional)
     * @throws ApiException on non-2xx response
     * @return array of \DocuSign\eSign\Model\FolderItemsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function listItemsWithHttpInfo($account_id, $folder_id, \DocuSign\eSign\Api\FoldersApi\ListItemsOptions $options = null): array
    {
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling listItems');
        }
        // verify the required parameter 'folder_id' is set
        if ($folder_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $folder_id when calling listItems');
        }
        // parse inputs
        $resourcePath = "/v2.1/accounts/{accountId}/folders/{folderId}";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] = isset($headerParams['Accept']) ? $headerParams['Accept'] : $this->apiClient->selectHeaderAccept(['application/json']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        if ($options != null)
        {
            // query params
            if ($options->getFromDate() != 'null') {
                $queryParams['from_date'] = $this->apiClient->getSerializer()->toQueryValue($options->getFromDate());
            }
            if ($options->getIncludeItems() != 'null') {
                $queryParams['include_items'] = $this->apiClient->getSerializer()->toQueryValue($options->getIncludeItems());
            }
            if ($options->getOwnerEmail() != 'null') {
                $queryParams['owner_email'] = $this->apiClient->getSerializer()->toQueryValue($options->getOwnerEmail());
            }
            if ($options->getOwnerName() != 'null') {
                $queryParams['owner_name'] = $this->apiClient->getSerializer()->toQueryValue($options->getOwnerName());
            }
            if ($options->getSearchText() != 'null') {
                $queryParams['search_text'] = $this->apiClient->getSerializer()->toQueryValue($options->getSearchText());
            }
            if ($options->getStartPosition() != 'null') {
                $queryParams['start_position'] = $this->apiClient->getSerializer()->toQueryValue($options->getStartPosition());
            }
            if ($options->getStatus() != 'null') {
                $queryParams['status'] = $this->apiClient->getSerializer()->toQueryValue($options->getStatus());
            }
            if ($options->getToDate() != 'null') {
                $queryParams['to_date'] = $this->apiClient->getSerializer()->toQueryValue($options->getToDate());
            }
        }

        // path params
        if ($account_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "accountId", $account_id);
        }
        // path params
        if ($folder_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "folderId", $folder_id);
        }

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\DocuSign\eSign\Model\FolderItemsResponse',
                '/v2.1/accounts/{accountId}/folders/{folderId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\DocuSign\eSign\Model\FolderItemsResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\FolderItemsResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\ErrorDetails', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation moveEnvelopes
     *
     * Moves an envelope from its current folder to the specified folder.
     *
     * @param ?string $account_id The external account number (int) or account ID Guid.
     * @param ?string $folder_id The ID of the folder being accessed.
     * @param \DocuSign\eSign\Model\FoldersRequest $folders_request  (optional)
     * @throws ApiException on non-2xx response
     * @return \DocuSign\eSign\Model\FoldersResponse
     */
    public function moveEnvelopes($account_id, $folder_id, $folders_request = null)
    {
        list($response) = $this->moveEnvelopesWithHttpInfo($account_id, $folder_id, $folders_request);
        return $response;
    }

    /**
     * Operation moveEnvelopesWithHttpInfo
     *
     * Moves an envelope from its current folder to the specified folder.
     *
     * @param ?string $account_id The external account number (int) or account ID Guid.
     * @param ?string $folder_id The ID of the folder being accessed.
     * @param \DocuSign\eSign\Model\FoldersRequest $folders_request  (optional)
     * @throws ApiException on non-2xx response
     * @return array of \DocuSign\eSign\Model\FoldersResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function moveEnvelopesWithHttpInfo($account_id, $folder_id, $folders_request = null): array
    {
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling moveEnvelopes');
        }
        // verify the required parameter 'folder_id' is set
        if ($folder_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $folder_id when calling moveEnvelopes');
        }
        // parse inputs
        $resourcePath = "/v2.1/accounts/{accountId}/folders/{folderId}";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] = isset($headerParams['Accept']) ? $headerParams['Accept'] : $this->apiClient->selectHeaderAccept(['application/json']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);


        // path params
        if ($account_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "accountId", $account_id);
        }
        // path params
        if ($folder_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "folderId", $folder_id);
        }

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        // body params
        $_tempBody = null;
        if (isset($folders_request)) {
            $_tempBody = $folders_request;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\DocuSign\eSign\Model\FoldersResponse',
                '/v2.1/accounts/{accountId}/folders/{folderId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\DocuSign\eSign\Model\FoldersResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\FoldersResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\ErrorDetails', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation search
     *
     * Gets a list of envelopes in folders matching the specified criteria.
     *
     * @param ?string $account_id The external account number (int) or account ID Guid.
     * @param ?string $search_folder_id Specifies the envelope group that is searched by the request. These are logical groupings, not actual folder names. Valid values are: drafts, awaiting_my_signature, completed, out_for_signature.
     * @param  \DocuSign\eSign\Api\FoldersApi\SearchOptions for modifying the behavior of the function. (optional)
     * @throws ApiException on non-2xx response
     * @return \DocuSign\eSign\Model\FolderItemResponse
     */
    public function search($account_id, $search_folder_id, \DocuSign\eSign\Api\FoldersApi\SearchOptions $options = null)
    {
        list($response) = $this->searchWithHttpInfo($account_id, $search_folder_id, $options);
        return $response;
    }

    /**
     * Operation searchWithHttpInfo
     *
     * Gets a list of envelopes in folders matching the specified criteria.
     *
     * @param ?string $account_id The external account number (int) or account ID Guid.
     * @param ?string $search_folder_id Specifies the envelope group that is searched by the request. These are logical groupings, not actual folder names. Valid values are: drafts, awaiting_my_signature, completed, out_for_signature.
     * @param  \DocuSign\eSign\Api\FoldersApi\SearchOptions for modifying the behavior of the function. (optional)
     * @throws ApiException on non-2xx response
     * @return array of \DocuSign\eSign\Model\FolderItemResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function searchWithHttpInfo($account_id, $search_folder_id, \DocuSign\eSign\Api\FoldersApi\SearchOptions $options = null): array
    {
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling search');
        }
        // verify the required parameter 'search_folder_id' is set
        if ($search_folder_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $search_folder_id when calling search');
        }
        // parse inputs
        $resourcePath = "/v2.1/accounts/{accountId}/search_folders/{searchFolderId}";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] = isset($headerParams['Accept']) ? $headerParams['Accept'] : $this->apiClient->selectHeaderAccept(['application/json']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        if ($options != null)
        {
            // query params
            if ($options->getAll() != 'null') {
                $queryParams['all'] = $this->apiClient->getSerializer()->toQueryValue($options->getAll());
            }
            if ($options->getCount() != 'null') {
                $queryParams['count'] = $this->apiClient->getSerializer()->toQueryValue($options->getCount());
            }
            if ($options->getFromDate() != 'null') {
                $queryParams['from_date'] = $this->apiClient->getSerializer()->toQueryValue($options->getFromDate());
            }
            if ($options->getIncludeRecipients() != 'null') {
                $queryParams['include_recipients'] = $this->apiClient->getSerializer()->toQueryValue($options->getIncludeRecipients());
            }
            if ($options->getOrder() != 'null') {
                $queryParams['order'] = $this->apiClient->getSerializer()->toQueryValue($options->getOrder());
            }
            if ($options->getOrderBy() != 'null') {
                $queryParams['order_by'] = $this->apiClient->getSerializer()->toQueryValue($options->getOrderBy());
            }
            if ($options->getStartPosition() != 'null') {
                $queryParams['start_position'] = $this->apiClient->getSerializer()->toQueryValue($options->getStartPosition());
            }
            if ($options->getToDate() != 'null') {
                $queryParams['to_date'] = $this->apiClient->getSerializer()->toQueryValue($options->getToDate());
            }
        }

        // path params
        if ($account_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "accountId", $account_id);
        }
        // path params
        if ($search_folder_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "searchFolderId", $search_folder_id);
        }

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\DocuSign\eSign\Model\FolderItemResponse',
                '/v2.1/accounts/{accountId}/search_folders/{searchFolderId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\DocuSign\eSign\Model\FolderItemResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\FolderItemResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\ErrorDetails', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
