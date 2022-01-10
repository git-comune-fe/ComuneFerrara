<?php

    use yii\widgets\ListView;
?>

<?php
    $modelLabel = strtolower($model->getGrammar()->getModelLabel());



    use open20\design\assets\BootstrapItaliaDesignAsset;

    $bootstrapItaliaAsset = BootstrapItaliaDesignAsset::register($this);
    $cssClass= 'uk-container';
?>

<script>
    window.addEventListener("load", function(event) {
        if(document.getElementById("no-content-avvisi")){
            
            var content=document.getElementsByClassName("avvisi-argomenti-block")[0];
            content.style.display = "none"; 
           
        }
    });

</script>

<div class="modulo-backend-<?= $modelLabel ?> <?= $cssClass ?>">
    
    <div class="card-<?= $modelLabel ?>-container mt-5">
        <?php
        if ($dataProvider->getTotalCount() > 0) {

            $dataProvider->setPagination([
                'params' => $params,
                'route' => $currentPage,
                'pageSize' => $dataProvider->getPagination()->pageSize ?? 3,
            ]);

            echo ListView::widget([
                'dataProvider' => $dataProvider,
                'itemView' => '_itemCardNews',
                'viewParams' => [
                    'detailPage' => $detailPage,
                    'viewFields' => $viewFields,
                    'blockItemId' => $blockItemId,
                ],
                //'layout' => "<div class='summary-design'>{summary}</div>\n<div class='list-view-design row'>{items}</div>\n<div class='pagination-design'>{pager}</div>",
                'summary' => '',
                'itemOptions' => [
                    'tag' => false
                ],
                'options' => [
                    'class' => 'list-view w-100 d-flex flex-wrap'
                ]
            ]);
        }else{ ?>
            <div id="no-content-avvisi" class="no-result">
                <p >Non sono presenti contenuti</p>
                
            </div>
        <?php } ?>
    </div>
</div>