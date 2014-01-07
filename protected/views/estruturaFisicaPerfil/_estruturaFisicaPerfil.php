<?php


    // example code for the view "_relational" that returns the HTML content
    // echo CHtml::tag('h3',array(),'RELATIONAL DATA EXAMPLE ROW');
    $this->widget('bootstrap.widgets.TbExtendedGridView', array(
                    'id'=>'estrutura-fisica-perfil-grid',
                    'type'=>'striped',
                    //'fixedHeader' => true,
                    'dataProvider' => $gridDataProvider,
                    'template' => "{items}",
                    'columns' => array(
 
                        //'id',
                        array(
                            'name'=>'perfil_id',
                            'headerHtmlOptions'=>array('style'=>'width:400px;'),
                            'value'=>'$data->perfil["descricao"]',
                            'sortable' => false,
                            ),
                        /*
                         * nao esta funcionado dentro do TbRelationalColumn
                         */
                        array(
                                'class' => 'bootstrap.widgets.TbEditableColumn',
                                'name' => 'perfil_id',
                                'type' => 'raw',
                                'value' => '$data->perfil["descricao"]',
                                'sortable'=>false,
                                'editable' => array(
                                        //'url'=>'array("perfil/editableUpdate", "id"=>$data->perfil_id)',
                                        'url'=>$this->createUrl("perfil/editableUpdate", array('model'=>'Perfil', 'field'=>'descricao')),
                                        'placement' => 'bottom',
                                        'inputclass' => 'span2',
                        )
                        ),

                        array(
                            'name'=>'quantidade',
                            'htmlOptions'=>array('style'=>'width:10px;text-align:right;'),
                            'value'=>'$data->quantidade',
                            'sortable' => false,
                            ),
                        array(
                            'name'=>'unidade',
                            'value'=>'$data->item->unidade',
                            'sortable' => false,
                            ),
                        array(
                                'class'=>'bootstrap.widgets.TbButtonColumn',
                        ),
                    ),
    ));

?>