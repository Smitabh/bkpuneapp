<?php namespace Iocare\BkpuneWebservice\Models;

use Model;
use Flash;

/**
 * Type Model
 */
class Type extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'iocare_bkpunewebservice_types';

    /**
     * @var array Relations
     */
    public $morphMany = [
        'article' => ['Iocare\BkpuneWebservice\Models\Article', 'type' => 'article']
    ];

    public function getTypeOptions()
    {
      return ['gitapathshala' => 'Gitapa Path shala',
              'zonal' => 'Zonal Center',
              'district' => 'District Center'];
    }

    public function getCenterIdOptions()
    {
      return Center::all()->lists('name', 'id');
    }

    public function afterCreate()
    {
      // Add this to the Article as well
      $article = new Article;
      $article -> type = 'Type';
      $article -> article_id = $this -> id;

      // Returns false if model is invalid
      $success = $article->save();
      if($success)
        return Flash::success('Successfully Added article');
      else
        return Flash::error('Failed to add the article');
    }

    public function afterDelete()
    {
        Prop::where('type', '=', 'Type')->where('article_id', '=', $this -> id)->delete();
        return Flash::success('Successfully Deleted article');
    }

}