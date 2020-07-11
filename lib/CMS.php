<?php


namespace HubSpot;


use GuzzleHttp\ClientInterface;
use HubSpot\Client\Cms\Domains\Api\DomainsApi;
use HubSpot\Client\Cms\SiteSearch\Api\DefaultApi;
use HubSpot\Client\Cms\UrlRedirects\Api\RedirectsApi;
use HubSpot\Client\Cms\UrlRedirects\Model\UrlMapping;
use HubSpot\Client\Cms\UrlRedirects\Model\UrlMappingCreateRequestBody;

final class CMS
{
    private ClientInterface $client;
    private Config $config;

    public function __construct(ClientInterface $client, Config $config)
    {
        $this->client = $client;
        $this->config = $config;
    }

    public function getAuditLogs(AuditLogOptions $options)
    {
        return (new \HubSpot\Client\Cms\AuditLogs\Api\DefaultApi($this->client, $this->config))
            ->getPage(
                $options->object_id,
                $options->user_id,
                $options->after,
                $options->before,
                $options->sort,
                $options->event_type,
                $options->limit,
                $options->object_type
            );
    }

    public function getAuditLogsAsync(AuditLogOptions $options)
    {
        return (new \HubSpot\Client\Cms\AuditLogs\Api\DefaultApi($this->client, $this->config))
            ->getPageAsync(
                $options->object_id,
                $options->user_id,
                $options->after,
                $options->before,
                $options->sort,
                $options->event_type,
                $options->limit,
                $options->object_type
            );
    }

    public function getDomains(PageOptions $options)
    {
        return (new DomainsApi($this->client, $this->config))
            ->getPage(
                $options->created_at,
                $options->created_after,
                $options->created_before,
                $options->updated_at,
                $options->updated_after,
                $options->updated_before,
                $options->sort,
                $options->properties,
                $options->after,
                $options->before,
                $options->limit,
                $options->archived
            );
    }

    public function getDomainsAsync(PageOptions $options)
    {
        return (new DomainsApi($this->client, $this->config))
            ->getPageAsync(
                $options->created_at,
                $options->created_after,
                $options->created_before,
                $options->updated_at,
                $options->updated_after,
                $options->updated_before,
                $options->sort,
                $options->properties,
                $options->after,
                $options->before,
                $options->limit,
                $options->archived
            );
    }

    public function getDomainById($id, $archived = null)
    {
        return (new DomainsApi($this->client, $this->config))
            ->getById($id, $archived);
    }

    public function getDomainByIdAsync($id, $archived = null)
    {
        return (new DomainsApi($this->client, $this->config))
            ->getByIdAsync($id, $archived);
    }

    public function getPerformances(PerformanceOptions $options)
    {
        return (new \HubSpot\Client\Cms\Performance\Api\DefaultApi())
            ->getPage(
                $options->domain,
                $options->path,
                $options->pad,
                $options->sum,
                $options->period,
                $options->interval,
                $options->start,
                $options->end
            );
    }

    public function getPerformancesAsync(PerformanceOptions $options)
    {
        return (new \HubSpot\Client\Cms\Performance\Api\DefaultApi())
            ->getPageAsync(
                $options->domain,
                $options->path,
                $options->pad,
                $options->sum,
                $options->period,
                $options->interval,
                $options->start,
                $options->end
            );
    }

    public function getUptime(PerformanceOptions $options)
    {
        return (new \HubSpot\Client\Cms\Performance\Api\DefaultApi())
            ->getUptime(
                $options->domain,
                $options->path,
                $options->pad,
                $options->sum,
                $options->period,
                $options->interval,
                $options->start,
                $options->end
            );
    }

    public function getUptimeAsync(PerformanceOptions $options)
    {
        return (new \HubSpot\Client\Cms\Performance\Api\DefaultApi())
            ->getUptimeAsync(
                $options->domain,
                $options->path,
                $options->pad,
                $options->sum,
                $options->period,
                $options->interval,
                $options->start,
                $options->end
            );
    }

    public function getContentById(int $id, $type = null)
    {
        return (new DefaultApi($this->client, $this->config))
                    ->getById($id, $type);
    }

    public function getContentByIdAsync(int $id, $type = null)
    {
        return (new DefaultApi($this->client, $this->config))
            ->getByIdAsync($id, $type);
    }

    public function search(SearchOptions $options)
    {
        return (new DefaultApi($this->client, $this->config))
            ->search(
                $options->query,
                $options->limit,
                $options->offset,
                $options->language,
                $options->match_prefix,
                $options->autocomplete,
                $options->popularity_boost,
                $options->boost_limit,
                $options->min_score,
                $options->boost_recent,
                $options->table_id,
                $options->hubdb_query,
                $options->key_string,
                $options->domain,
                $options->type,
                $options->path_prefix,
                $options->property,
                $options->length,
                $options->group_id
            );
    }

    public function searchAsync(SearchOptions $options)
    {
        return (new DefaultApi($this->client, $this->config))
            ->searchAsync(
                $options->query,
                $options->limit,
                $options->offset,
                $options->language,
                $options->match_prefix,
                $options->autocomplete,
                $options->popularity_boost,
                $options->boost_limit,
                $options->min_score,
                $options->boost_recent,
                $options->table_id,
                $options->hubdb_query,
                $options->key_string,
                $options->domain,
                $options->type,
                $options->path_prefix,
                $options->property,
                $options->length,
                $options->group_id
            );
    }

    public function getRedirects(PageOptions $options)
    {
        return (new RedirectsApi($this->client, $this->config))
            ->getPage(
                $options->created_at,
                $options->created_after,
                $options->created_before,
                $options->updated_at,
                $options->updated_after,
                $options->updated_before,
                $options->sort,
                $options->properties,
                $options->after,
                $options->before,
                $options->limit,
                $options->archived
            );
    }

    public function getRedirectsAsync(PageOptions $options)
    {
        return (new RedirectsApi($this->client, $this->config))
            ->getPageAsync(
                $options->created_at,
                $options->created_after,
                $options->created_before,
                $options->updated_at,
                $options->updated_after,
                $options->updated_before,
                $options->sort,
                $options->properties,
                $options->after,
                $options->before,
                $options->limit,
                $options->archived
            );
    }

    public function archiveRedirect(string $redirectId)
    {
        (new RedirectsApi($this->client, $this->config))
            ->archive($redirectId);
    }

    public function archiveRedirectAsync(string $redirectId)
    {
        (new RedirectsApi($this->client, $this->config))
            ->archiveAsync($redirectId);
    }

    public function createRedirect(UrlMappingCreateRequestBody $body)
    {
        return (new RedirectsApi($this->client, $this->config))
            ->create($body);
    }

    public function createRedirectAsync(UrlMappingCreateRequestBody $body)
    {
        return (new RedirectsApi($this->client, $this->config))
            ->createAsync($body);
    }

    public function updateRedirect(string $redirectId, UrlMapping $body)
    {
        return (new RedirectsApi($this->client, $this->config))
            ->update($redirectId, $body);
    }

    public function updateRedirectAsync(string $redirectId, UrlMapping $body)
    {
        return (new RedirectsApi($this->client, $this->config))
            ->updateAsync($redirectId, $body);
    }

    public function getRedirectById(string $redirectId)
    {
        return (new RedirectsApi($this->client, $this->config))
            ->getById($redirectId);
    }

    public function getRedirectByIdAsync(string $redirectId)
    {
        return (new RedirectsApi($this->client, $this->config))
            ->getByIdAsync($redirectId);
    }
}