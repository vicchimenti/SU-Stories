<?php

$genericFacet = \T4\PHPSearchLibrary\FacetFactory::getInstance('GenericFacet', $documentCollection, $queryHandler);
$filters = $queryHandler->getQueryValuesForPrint();
$categoryFilters = array();
$dateFilters = array();
$rangeFilters = array();
$i = 0;
?>
<section class="su-listing">
    <div id="searchoptionsGeneric" role="search" class="su-listing--form-wrapper bg--dark global-padding--8x" data-t4-ajax-group="courseSearch">

    <div class="grid-container">
      <h2 class="h3">Stories from the Albers Point of View</h2>
    </div>

    <form>
      <div class="cell initial-12">
        <label for="keywords">Search</label>
        <input type="text" name="keywords" id="keywords" placeholder="Search All Stories&hellip;" value="<?php echo !empty($query['keywords']) ? $query['keywords']: ''  ?>">
      </div>
      <!--  -->
      <div class="cell initial-12">
        <input type="submit" value="Submit" class="button small primary expand">
      </div>
    </form>
    </div>
    <div class="filter-feedback">
        <div class="grid-container">
            <div id="searchoptions-filters" class="active-filters" role="search" data-t4-ajax-group="courseSearch" aria-label="Deselect Filters">
                <div id="event-filters" class="active-filters--list" >
                    <span>Active filters:</span>
                    <?php if ($filters !== null) : ?>
                        <ul class="no-bullet">
                            <?php
                            foreach ($dateFilters as $key) {
                                if (isset($filters[$key])) :
                                    $value = $filters[$key]; ?>
                                    <li class="filter-<?php echo $i++ ?>  small primary" role="button" tabindex="0" data-t4-filter="<?php echo $key ?>"><?php echo date('m/d/Y', strtotime($value)); ?><span class="remove"><i class="fa fa-times"></i></span></li>
                                <?php
                                endif;
                            }
                            foreach ($rangeFilters as $key => $max) {
                                if (isset($filters[$key]) && $filters[$key] !== $max) :
                                    $value = $filters[$key]; ?>
                                    <li class="filter-<?php echo $i++ ?>  small primary" role="button" tabindex="0" data-t4-filter="<?php echo $key ?>"><?php echo '$' . $value; ?><span class="remove"><i class="fa fa-times"></i></span></li>
                                <?php
                                endif;
                            }
                            if (isset($filters['keywords'])) :
                                ?>
                                <li class="filter-<?php echo $i++ ?> small primary" role="button" tabindex="0" data-t4-filter="keywords"> <?php echo $filters['keywords'] ?><span class="remove"><i class="fa fa-times"></i></span></li>
                            <?php
                            endif; ?>
                        </ul>
                    <?php endif; ?>
                </div>
              <?php if ($i > 0) : ?>
              <div class="funderline">
                <a href="index.php" role="button" data-t4-ajax-link="true">
                  Clear Filters
                  <span class="fa fa-times"></span>
                </a>
              </div>
              <?php endif; ?>   
              <div class="search-count"><p>Showing <strong><?php echo count($results); ?> posts</strong> of <?php echo $totalResults; ?></p></div>
            </div>
        </div>
    </div>
</section>




<!-- 

categoryFilters

'newsTopics', 'newsTypes', 'schoolsColleges'



search filters

<div class="cell medium-4">
<?php
        $element = 'newsTopics';
        $genericFacet->setMember('element', $element);
        $genericFacet->setMember('type', 'List');
        $genericFacet->setMember('facetSource', 'documents');
        $genericFacet->setMember('sortingState', true);
        $genericFacet->setMember('multipleValueState', true);
        $genericFacet->setMember('multipleValueSeparator', '|');
        $search = $genericFacet->displayFacet();
        ?>
        <?php if (!empty($search)) : ?>
          <label for="<?php echo $element; ?>" class="label-text">Filter by Topic</label>
          <select id="<?php echo $element; ?>" name="<?php echo $element; ?>" data-cookie="T4_persona">
            <option value="">All Topics</option>
            <?php foreach ($search as $item) : ?>
              <option value="<?php echo strtolower($item['value']); ?>" <?php echo $item['selected'] ? 'selected' : '' ?>><?php echo $item['value']; ?></option>
            <?php endforeach; ?>
          </select>
        <?php endif; ?>
      </div>
      <div class="cell medium-4">
        <?php
        $element = 'newsTypes';
        $genericFacet->setMember('element', $element);
        $genericFacet->setMember('type', 'List');
        $genericFacet->setMember('facetSource', 'documents');
        $genericFacet->setMember('sortingState', true);
        $genericFacet->setMember('multipleValueState', true);
        $genericFacet->setMemb>
        </select>
      </div>
      <div class="cell medium-4">
        <?php
        $element = 'schoolsColleges';
        $genericFacet->setMember('element', $element);
        $genericFacet->setMember('type', 'List');
        $genericFacet->setMember('facetSource', 'documents');
        $genericFacet->setMember('sortingState', true);
        $genericFacet->setMember('multipleValueState', true);
        $genericFacet->setMember('multipleValueSeparator', '|');
        $search = $genericFacet->displayFacet();
        ?>
        <label for="<?php echo $element; ?>" class="label-text">Search by School or College</label>
        <select id="<?php echo $element; ?>" name="<?php echo $element; ?>" data-cookie="">
          <option value="">All Schools & Colleges</option>er('multipleValueSeparator', '|');
        $search = $genericFacet->displayFacet();
        ?>
        <label for="<?php echo $element; ?>" class="label-text">Search by Type</label>
        <select id="<?php echo $element; ?>" name="<?php echo $element; ?>" data-cookie="T4_persona">
          <option value="">All Types</option>
          <?php foreach ($search as $item) : ?>
              <option value="<?php echo strtolower($item['value']); ?>" <?php echo $item['selected'] ? 'selected' : '' ?>><?php echo $item['value']; ?></option>
          <?php endforeach; ?
          <?php foreach ($search as $item) : ?>
              <option value="<?php echo strtolower($item['value']); ?>" <?php echo $item['selected'] ? 'selected' : '' ?>><?php echo $item['value']; ?></option>
          <?php endforeach; ?>
        </select>
      </div>



                                  // foreach ($categoryFilters as $key) {
                            //     if (isset($filters[$key]) && is_array($filters[$key])) :
                            //         foreach ($filters[$key] as $value) : ?>
                            //             <li class="filter-<?php echo $i++ ?>  small primary" role="button" tabindex="0" data-t4-value="<?php echo strtolower($value) ?>" data-t4-filter="<?php echo $key ?>"><?php echo $value ?><span class="remove"><i class="fa fa-times"></i></span></li>
                            //         <?php
                            //         endforeach;
                            //     elseif (isset($filters[$key])) :
                            //         $value = $filters[$key]; ?>
                            //         <li class="filter-<?php echo $i++ ?>  small primary" role="button" tabindex="0" data-t4-value="<?php echo strtolower($value) ?>" data-t4-filter="<?php echo $key ?>"><?php echo $value ?><span class="remove"><i class="fa fa-times"></i></span></li>
                            //     <?php
                            //     endif;
                            // }
 -->