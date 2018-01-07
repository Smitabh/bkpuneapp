<?php namespace Iocare\BkpuneWebservice\Models;

use Model;

/**
 * Srticle Model
 */
class Article extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'iocare_bkpunewebservice_articles';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $morphTo = [
            'article' => []
        ];

    /**
     * @var array Cache for propList() method
     */
    protected static $propList = [];

    public function getTypeOptions()
    {
      return ['Type'];
    }

    public static function getKindOptions($propId)
    {
        if (isset(self::$propList[$propId]))
            return self::$propList[$propId];
        return self::$propList[$propId] = self::whereTypeId($propId)->lists('name', 'id');
    }

}