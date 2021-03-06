<?php

namespace common\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "user_profile".
 *
 * @property integer $id
 * @property string $nome
 * @property string $cognome
 * @property string $codice_fiscale
 * @property string $sesso
 * @property string $image
 * @property string $purpos
 * @property string $expl
 * @property string $city
 * @property string $country
 * @property string $sharing_purpos
 * @property string $sharing_expl
 * @property string $sharing_role
 * @property integer $sharing
 * @property string $presentazione_breve
 * @property string $presentazione_personale
 * @property string $nascita_data
 * @property integer $privacy
 * @property string $indirizzo_residenza
 * @property string $cap_residenza
 * @property string $numero_civico_residenza
 * @property string $domicilio_indirizzo
 * @property string $domicilio_civico
 * @property string $domicilio_cap
 * @property string $domicilio_localita
 * @property string $domicilio_lat
 * @property string $domicilio_lon
 * @property string $widgets_selected
 * @property string $nazionalita
 * @property string $email_pec
 * @property string $altri_dati_contatto
 * @property string $telefono
 * @property string $cellulare
 * @property string $fax
 * @property integer $attivo
 * @property string $status
 * @property string $note
 * @property string $partita_iva
 * @property string $iban
 * @property string $facebook
 * @property string $twitter
 * @property string $linkedin
 * @property string $googleplus
 * @property string $ultimo_accesso
 * @property string $ultimo_logout
 * @property integer $validato_almeno_una_volta
 * @property integer $avatar_id
 * @property integer $nascita_nazioni_id
 * @property integer $nascita_province_id
 * @property integer $nascita_comuni_id
 * @property integer $user_profile_titoli_studio_id
 * @property integer $user_profile_stati_civili_id
 * @property integer $nazionalita_residenza_id
 * @property integer $comune_residenza_id
 * @property integer $provincia_residenza_id
 * @property integer $domicilio_provincia_id
 * @property integer $domicilio_comune_id
 * @property integer $residenza_nazione_id
 * @property integer $facilitatore_id
 * @property integer $default_facilitatore
 * @property integer $user_profile_area_id
 * @property string $user_profile_area_other
 * @property integer $user_profile_role_id
 * @property string $user_profile_role_other
 * @property integer $user_profile_age_group_id
 * @property integer $prevalent_partnership_id
 * @property integer $user_id
 * @property string $remote_work
 * @property string $effort
 * @property string $updated_at
 * @property string $deleted_at
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $deleted_by
 */
class UserProfile extends \yii\db\ActiveRecord
{
    /**
     * @const STATUS_DELETED User-status: Deleted
     */
    const STATUS_DELETED = 0;

    /**
     * @const STATUS_ACTIVE User-status: Active
     */
    const STATUS_ACTIVE = 1;

    public $file;
    public $del_img;    

    public static function tableName()
    {
        return 'user_profile';
    }

        public static function findByUsername($username) 
    {
//        return static::findOne(['username' => $username, 'status' => self::STATUS_ACTIVE]);
        return static::findOne(['nome' => $username, 'attivo' => self::STATUS_ACTIVE]);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'cognome'], 'required'],
            [['sesso','image','expl', 'presentazione_personale', 'widgets_selected', 'nazionalita', 'altri_dati_contatto', 'note'], 'string'],
            [['purpos','remote_work','effort','city','country'],'string'],
            [['nascita_data', 'ultimo_accesso', 'ultimo_logout', 'created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['sharing','privacy', 'attivo', 'validato_almeno_una_volta', 'avatar_id', 'nascita_nazioni_id', 'nascita_province_id', 'nascita_comuni_id', 'user_profile_titoli_studio_id', 'user_profile_stati_civili_id', 'nazionalita_residenza_id', 'comune_residenza_id', 'provincia_residenza_id', 'domicilio_provincia_id', 'domicilio_comune_id', 'residenza_nazione_id', 'facilitatore_id', 'default_facilitatore', 'user_profile_area_id', 'user_profile_role_id', 'user_profile_age_group_id', 'prevalent_partnership_id', 'user_id', 'created_by', 'updated_by', 'deleted_by'], 'integer'],
            [['nome', 'cognome', 'presentazione_breve', 'indirizzo_residenza', 'numero_civico_residenza', 'domicilio_indirizzo', 'domicilio_localita', 'email_pec', 'telefono', 'cellulare', 'fax', 'status', 'facebook', 'twitter', 'linkedin', 'googleplus', 'user_profile_area_other', 'user_profile_role_other'], 'string', 'max' => 255],
            [['codice_fiscale'], 'string', 'max' => 16],
            [['cap_residenza', 'domicilio_lat', 'domicilio_lon'], 'string', 'max' => 45],
            [['domicilio_civico'], 'string', 'max' => 10],
            [['domicilio_cap'], 'string', 'max' => 5],
            [['partita_iva', 'iban'], 'string', 'max' => 20],
            [['file'], 'file', 'extensions' => 'png, jpg'],
            [['del_img'], 'boolean'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Name',
            'email' => 'E-mail',
            'cognome' => 'Surname',
            'sesso' => 'Gender',
            'purpos' => 'Purposes',
            'country' => 'Country',
            'city' => 'City',
            'expl' => 'Explaination',
            'sharing_purpos' => 'Purposes',
            'sharing_expl' => 'Explaination',
            'sharing_role' => 'Your role',
            'sharing' => 'Sharing platform',
            'user_profile_age_group_id' => 'Age',
            'telefono' => 'Telephone',
            'image' => 'Photo',
            'note' => 'About me',
            'user_profile_role_id' => 'Role',
            'presentazione_breve' => 'Remote work',
            'presentazione_personale' => 'About me',
            
            'codice_fiscale' => 'Codice Fiscale',
            'nascita_data' => 'Nascita Data',
            'privacy' => 'Privacy',
            'indirizzo_residenza' => 'Indirizzo Residenza',
            'cap_residenza' => 'Cap Residenza',
            'numero_civico_residenza' => 'Numero Civico Residenza',
            'domicilio_indirizzo' => 'Domicilio Indirizzo',
            'domicilio_civico' => 'Domicilio Civico',
            'domicilio_cap' => 'Domicilio Cap',
            'domicilio_localita' => 'Domicilio Localita',
            'domicilio_lat' => 'Domicilio Lat',
            'domicilio_lon' => 'Domicilio Lon',
            'widgets_selected' => 'Widgets Selected',
            'nazionalita' => 'Nazionalita',
            'email_pec' => 'E-mail',
            'altri_dati_contatto' => 'Altri Dati Contatto',
            'cellulare' => 'Cellulare',
            'fax' => 'Fax',
            'attivo' => 'Attivo',
            'status' => 'Status',
            'partita_iva' => 'Partita Iva',
            'iban' => 'Iban',
            'facebook' => 'Facebook',
            'twitter' => 'Twitter',
            'linkedin' => 'Linkedin',
            'googleplus' => 'Googleplus',
            'ultimo_accesso' => 'Ultimo Accesso',
            'ultimo_logout' => 'Ultimo Logout',
            'validato_almeno_una_volta' => 'Validato Almeno Una Volta',
            'nascita_nazioni_id' => 'Nascita Nazioni ID',
            'nascita_province_id' => 'Nascita Province ID',
            'nascita_comuni_id' => 'Nascita Comuni ID',
            'user_profile_titoli_studio_id' => 'User Profile Titoli Studio ID',
            'user_profile_stati_civili_id' => 'User Profile Stati Civili ID',
            'nazionalita_residenza_id' => 'Nazionalita Residenza ID',
            'comune_residenza_id' => 'Comune Residenza ID',
            'provincia_residenza_id' => 'Provincia Residenza ID',
            'domicilio_provincia_id' => 'Domicilio Provincia ID',
            'domicilio_comune_id' => 'Domicilio Comune ID',
            'residenza_nazione_id' => 'Residenza Nazione ID',
            'facilitatore_id' => 'Facilitatore ID',
            'default_facilitatore' => 'Default Facilitatore',
            'user_profile_area_id' => 'User Profile Area ID',
            'user_profile_area_other' => 'User Profile Area Other',
            'user_profile_role_other' => 'User Profile Role Other',
            'prevalent_partnership_id' => 'Prevalent Partnership ID',
            'user_id' => 'User ID',
            'remote_work' => 'Remote work',
            'effort' => 'Effort',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'deleted_by' => 'Deleted By',
        ];
    }
}
