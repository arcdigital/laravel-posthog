<?php

namespace Arcdigital\PostHog;

use PostHog\PostHog as PostHogClient;

class PostHog
{
    private static ?string $distinctId = null;

    public static function setDistinctId(string $id): void
    {
        self::$distinctId = $id;
    }

    /**
     * @param  array<string, mixed>  $properties
     *
     * @throws \Exception
     */
    public static function capture(string $event, array $properties = null, string $id = null): bool
    {
        return PostHogClient::capture([
            'distinctId' => self::$distinctId ?? $id,
            'event' => $event,
            'properties' => $properties,
        ]);
    }

    /**
     * @param  array<string, mixed>  $properties
     *
     * @throws \Exception
     */
    public static function identify(string $id, array $properties): bool
    {
        return PostHogClient::identify([
            'distinctId' => $id,
            'properties' => $properties,
        ]);
    }

    /**
     * @throws \Exception
     */
    public static function alias(string $id, string $alias): bool
    {
        return PostHogClient::alias([
            'distinctId' => $id,
            'alias' => $alias,
        ]);
    }

    /**
     * @param  array<mixed>  $groups
     * @param  array<mixed>  $personProperties
     * @param  array<mixed>  $groupProperties
     *
     * @throws \Exception
     */
    public static function isFeatureEnabled(
        string $key,
        string $distinctId,
        array $groups = [],
        array $personProperties = [],
        array $groupProperties = [],
        bool $onlyEvaluateLocally = false,
        bool $sendFeatureFlagEvents = true
    ): null|bool {
        return PostHogClient::isFeatureEnabled($key, $distinctId, $groups, $personProperties, $groupProperties, $onlyEvaluateLocally, $sendFeatureFlagEvents);
    }

    /**
     * @param  array<mixed>  $groups
     * @param  array<mixed>  $personProperties
     * @param  array<mixed>  $groupProperties
     *
     * @throws \Exception
     */
    public static function getFeatureFlag(
        string $key,
        string $distinctId,
        array $groups = [],
        array $personProperties = [],
        array $groupProperties = [],
        bool $onlyEvaluateLocally = false,
        bool $sendFeatureFlagEvents = true
    ): null|bool|string {
        return PostHogClient::getFeatureFlag($key, $distinctId, $groups, $personProperties, $groupProperties, $onlyEvaluateLocally, $sendFeatureFlagEvents);
    }

    /**
     * @param  array<mixed>  $groups
     * @param  array<mixed>  $personProperties
     * @param  array<mixed>  $groupProperties
     * @return array<mixed>
     *
     * @throws \Exception
     */
    public static function getAllFlags(
        string $distinctId,
        array $groups = [],
        array $personProperties = [],
        array $groupProperties = [],
        bool $onlyEvaluateLocally = false
    ): array {
        return PostHogClient::getAllFlags($distinctId, $groups, $personProperties, $groupProperties, $onlyEvaluateLocally);
    }
}
