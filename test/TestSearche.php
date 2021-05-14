<?php

use OpenSearch\Client\OpenSearchClient;
use OpenSearch\Client\SearchClient;
use OpenSearch\Generated\Search\RankType;
use OpenSearch\Util\SearchParamsBuilder;

require '../vendor/autoload.php';
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 5/14/21
 * Time: 2:09 PM
 * Project Name: OpenSearch
 */


$accessKeyId = '';
$secret = '';
$endPoint = '';
$appName = 'juhe_api_search';
$suggestName = '';
$options = ['debug' => true];

$client = new OpenSearchClient($accessKeyId, $secret, $endPoint, $options);


$searchClient = new SearchClient($client);

$params = new SearchParamsBuilder();
$params->setStart(0);
$params->setHits(30);
$params->setAppName('juhe_api_search');
$params->setQuery("default:'语音'");
$params->setFormat("json");
$params->addSort('did', SearchParamsBuilder::SORT_DECREASE);
$params->addFilter("type='1'");

$params->setSecondRankType(RankType::CAVA_SCRIPT);
$params->setFetchFields(['did']);


$ret = $searchClient->execute($params->build())->result;
var_dump(json_decode($ret));
