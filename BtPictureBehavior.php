<?php
class BtPictureBehavior extends CActiveRecordBehavior{
    
    public function getPictures(){        
        return  Btpicture::model()->findAllByAttributes(array('owner_id' => $this->owner->id, 'owner_name' => get_class($this->owner)));
    }
    
    ///make the same function but only using yii dao
}
?>
