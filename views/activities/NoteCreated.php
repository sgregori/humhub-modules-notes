<?php $this->beginContent('application.modules_core.activity.views.activityLayout', array('activity' => $activity)); ?>
<?php echo Yii::t('NotesModule.views_activities_NoteCreated', '{userName} created a new note {noteName}.', array(
    '{userName}' => '<strong>'. CHtml::encode($user->displayName) .'</strong>',
    '{noteName}' => '<strong>'. ActivityModule::formatOutput($target->getContentTitle()) .'</strong>'
)); ?>
<?php $this->endContent(); ?>

