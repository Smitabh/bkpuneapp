<?php namespace Iocare\BkpuneWebservice\Models;

use Model;
use Flash;
use Iocare\BkpuneWebservice\Models\Article;

/**
 * Center Model
 */
class Center extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'iocare_bkpunewebservice_centers';

    /**
     * @var array Relations
     */
    public $morphMany = [
        'article' => ['Iocare\BkpuneWebservice\Models\Prop', 'type' => 'article']
    ];

    public function afterCreate()
    {
      // Add this to the article as well
      $article = new Article;
      $article -> type = 'Centers';
      $article -> article_id = $this -> id;

      // Returns false if model is invalid
      $success = $prop->save();
      if($success)
        return Flash::success('Successfully Added Article');
      else
        return Flash::error('Failed to add the Article');
    }

    public function afterDelete()
    {
        Prop::where('type', '=', 'Center')->where('article_id', '=', $this -> id)->delete();
        return Flash::success('Successfully Deleted article');
    }

}