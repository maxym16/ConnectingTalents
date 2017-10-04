<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property string $slug
 * @property string $titolo
 * @property string $sottotitolo
 * @property string $descrizione_breve
 * @property string $descrizione
 * @property string $metakey
 * @property string $metadesc
 * @property integer $primo_piano
 * @property integer $immagine
 * @property integer $hits
 * @property integer $abilita_pubblicazione
 * @property integer $in_evidenza
 * @property string $data_pubblicazione
 * @property string $data_rimozione
 * @property integer $news_categorie_id
 * @property string $status
 * @property integer $comments_enabled
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $deleted_by
 * @property integer $version
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['slug', 'descrizione', 'metakey', 'metadesc'], 'string'],
            [['primo_piano', 'immagine', 'hits', 'abilita_pubblicazione', 'in_evidenza', 'news_categorie_id', 'comments_enabled', 'created_by', 'updated_by', 'deleted_by', 'version'], 'integer'],
            [['data_pubblicazione', 'data_rimozione', 'created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['news_categorie_id'], 'required'],
            [['titolo', 'sottotitolo', 'descrizione_breve', 'status'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'slug' => 'Slug',
            'titolo' => 'Title',
            'sottotitolo' => 'Subtitling',
            'descrizione_breve' => 'Short Description',
            'descrizione' => 'Description',
            'metakey' => 'Metakey',
            'metadesc' => 'Metadesc',
            'primo_piano' => 'First Floor',
            'immagine' => 'Image',
            'hits' => 'Hits',
            'abilita_pubblicazione' => 'Enable Publish',
            'in_evidenza' => 'Highlighted',
            'data_pubblicazione' => 'Publication Date',
            'data_rimozione' => 'Date Removal',
            'news_categorie_id' => 'News Categories ID',
            'status' => 'Status',
            'comments_enabled' => 'Comments Enabled',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'deleted_by' => 'Deleted By',
            'version' => 'Version',
        ];
    }
}
