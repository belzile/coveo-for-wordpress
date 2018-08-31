<?php
/*
 * Template Name: Good to Be Bad
 * Description: A Page Template with a darker design.
 */ ?>
<!DOCTYPE html>
<head>
  <meta about="Search all content at once." />
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, height=device-height">
  <link rel="stylesheet" href="https://static.cloud.coveo.com/searchui/v2.4609/css/CoveoFullSearch.css" />
  <script class="coveo-script" src="https://static.cloud.coveo.com/searchui/v2.4609/js/CoveoJsSearch.Lazy.js"></script>
  <script src="https://static.cloud.coveo.com/searchui/v2.4609/js/templates/templates.js"></script>
  <style>
    .site-content {
        padding-top: 0 !important;
    }
  </style>
  <script>
    <?php 
        $platformUrl = get_option('coveo_platform_url');
        $organizationId = get_option('coveo_organization_id');
        $apiKey = get_option('coveo_api_key');
    ?>

    document.addEventListener("DOMContentLoaded", function () {
        Coveo.SearchEndpoint.endpoints["default"] = new Coveo.SearchEndpoint({
            accessToken: '<?php echo $apiKey ?>',
            restUri: '<?php echo $platformUrl ?>' + "/rest/search",
            queryStringArguments: { organizationId: '<?php echo $organizationId ?>' }
        });
      Coveo.init(document.getElementById('search'));
    })
  </script>
</head>
<?php get_header(); ?>
<div id="search" class="CoveoSearchInterface" data-enable-history="true">
  <div class="CoveoFolding"></div>
  <div class="coveo-tab-section">
    <a class="CoveoTab" data-id="All" data-caption="All Content"></a>
  </div>
  <div class="coveo-search-section">
    <div class="CoveoSettings"></div>
    <div class="CoveoSearchbox" data-enable-omnibox="true"></div>
  </div>
  <div class="coveo-main-section">
    <div class="coveo-facet-column">
      <div class="CoveoFacet" data-title="Type" data-field="@objecttype" data-tab="All"></div>
      <div class="CoveoFacet" data-title="FileType" data-field="@filetype" data-tab="All"></div>
      <div class="CoveoFacet" data-title="Author" data-field="@author" data-tab="All"></div>
      <div class="CoveoTimespanFacet" data-tab="All"></div>
    </div>
    <div class="coveo-results-column">
      <div class="CoveoShareQuery"></div>
      <div class="CoveoExportToExcel"></div>
      <div class="CoveoPreferencesPanel">
        <div class="CoveoResultsPreferences"></div>
        <div class="CoveoResultsFiltersPreferences"></div>
      </div>
      <div class="CoveoBreadcrumb"></div>
      <div class="CoveoDidYouMean"></div>
      <div class="coveo-results-header">
        <div class="coveo-summary-section">
          <span class="CoveoQuerySummary"></span>
          <span class="CoveoQueryDuration"></span>
        </div>
        <div class="coveo-result-layout-section">
          <span class="CoveoResultLayoutSelector"></span>
        </div>
        <div class="coveo-sort-section">
          <span class="CoveoSort" data-sort-criteria="relevancy" data-caption="Relevance"></span>
          <span class="CoveoSort" data-sort-criteria="date descending,date ascending" data-caption="Date"></span>
        </div>
      </div>
      <div class="CoveoHiddenQuery"></div>
      <div class="CoveoErrorReport"></div>
      <div class="CoveoResultList" data-layout="list" data-wait-animation="fade" data-auto-select-fields-to-include="true"></div>
      <div class="CoveoResultList" data-layout="card" data-wait-animation="fade" data-auto-select-fields-to-include="true"></div>
      <div class="CoveoPager"></div>
      <div class="CoveoLogo"></div>
      <div class="CoveoResultsPerPage"></div>
    </div>
  </div>
</div>

<?php
get_footer();