<?php

/**
 * This is the model class for table "ib_imta_upload_nilai".
 *
 * The followings are the available columns in table 'ib_imta_upload_nilai':
 * @property integer $nilai_imta_id
 * @property integer $ib_imta_id
 * @property integer $created_by
 * @property string $create_at
 * @property string $update_at
 * @property integer $update_by
 * @property integer $v_surat
 * @property integer $v_kuasa
 * @property integer $v_nilek
 * @property integer $v_kurikulum
 * @property integer $v_aktanotaris
 * @property integer $v_pengesahankumham
 * @property integer $v_domisili
 * @property integer $v_skrptka
 * @property integer $v_ijinoperasional
 * @property integer $v_rekapsiswadanptk
 * @property integer $v_rekomendasidinas
 * @property integer $v_alasan
 * @property integer $v_jaminan
 * @property integer $v_paspor
 * @property integer $v_cv
 * @property integer $v_foto
 * @property integer $v_ijazah
 * @property integer $v_sehat
 * @property integer $v_pernyataan
 * @property string $global_reason
 *
 * The followings are the available model relations:
 * @property Users $updateBy
 * @property Users $createdBy
 * @property Ibimta $ibimta
 */
class Imtaverifikasi extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return imtaverifikasi the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ib_imta_upload_nilai';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ib_imta_id, created_by, create_at, update_at, update_by, global_reason', 'required'),
			array('ib_imta_id, created_by, update_by, v_surat, v_kuasa, v_nilek, v_kurikulum, v_aktanotaris, v_pengesahankumham, v_domisili,v_skrptka,v_ijinoperasional,v_rekapsiswadanptk,v_rekomendasidinas,v_alasan, v_jaminan, v_paspor, v_cv, v_foto, v_ijazah, v_sehat, v_pernyataan,v_stm,v_kitas,v_rekom,v_imtakemnaker,v_suratkontakkerja,v_hasilpenilaianijazah,v_laporankegiatanproses', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nilai_imta_id, ib_imta_id, created_by, create_at, update_at, update_by, v_surat, v_kuasa, v_nilek, v_kurikulum, v_aktanotaris, v_pengesahankumham, v_domisili,v_skrptka,v_ijinoperasional,v_rekapsiswadanptk,v_rekomendasidinas, v_alasan, v_jaminan, v_paspor, v_cv, v_foto, v_ijazah, v_sehat, v_pernyataan,v_stm,v_kitas,v_rekom,v_imtakemnaker,v_suratkontakkerja,v_hasilpenilaianijazah,v_laporankegiatanproses,global_reason', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'updateBy' => array(self::BELONGS_TO, 'Users', 'update_by'),
			'createdBy' => array(self::BELONGS_TO, 'Users', 'created_by'),
			'ibImta' => array(self::BELONGS_TO, 'IbImta', 'ib_imta_id'),
               'kibimtaUploadNilais' => array(self::BELONGS_TO, 'Statusdokumen', 'v_pernyataan'),
			'kibImtaUploadNilais1' => array(self::BELONGS_TO, 'Statusdokumen', 'v_kurikulum'),
			'kibImtaUploadNilais2' => array(self::BELONGS_TO, 'Statusdokumen', 'v_aktanotaris'),
			'kibImtaUploadNilais3' => array(self::BELONGS_TO, 'Statusdokumen', 'v_pengesahankumham'),
			'kibImtaUploadNilais4' => array(self::BELONGS_TO, 'Statusdokumen', 'v_domisili'),
			'kibImtaUploadNilais4' => array(self::BELONGS_TO, 'Statusdokumen', 'v_skrptka'),
			'kibImtaUploadNilais4' => array(self::BELONGS_TO, 'Statusdokumen', 'v_ijinoperasional'),
			'kibImtaUploadNilais4' => array(self::BELONGS_TO, 'Statusdokumen', 'v_rekapsiswadanptk'),
			'kibImtaUploadNilais4' => array(self::BELONGS_TO, 'Statusdokumen', 'v_rekomendasidinas'),
			'kibImtaUploadNilais5' => array(self::BELONGS_TO, 'Statusdokumen', 'v_alasan'),
			'kibImtaUploadNilais7' => array(self::BELONGS_TO, 'Statusdokumen', 'v_jaminan'),
			'kibImtaUploadNilais8' => array(self::BELONGS_TO, 'Statusdokumen', 'v_paspor'),
			'kibImtaUploadNilais9' => array(self::BELONGS_TO, 'Statusdokumen', 'v_cv'),
			'kibImtaUploadNilais10' => array(self::BELONGS_TO, 'Statusdokumen', 'v_foto'),
			'kibImtaUploadNilais11' => array(self::BELONGS_TO, 'Statusdokumen', 'v_ijazah'),
			'kibImtaUploadNilais12' => array(self::BELONGS_TO, 'Statusdokumen', 'v_sehat'),
			'kibImtaUploadNilais13' => array(self::BELONGS_TO, 'Statusdokumen', 'v_surat'),
			'kibImtaUploadNilais14' => array(self::BELONGS_TO, 'Statusdokumen', 'v_kuasa'),
			'kibImtaUploadNilais15' => array(self::BELONGS_TO, 'Statusdokumen', 'v_nilek'),
		    'kibImtaUploadNilais16' => array(self::BELONGS_TO, 'Statusdokumen', 'v_stm'),
			'kibImtaUploadNilais17' => array(self::BELONGS_TO, 'Statusdokumen', 'v_kitas'),
			'kibImtaUploadNilais18' => array(self::BELONGS_TO, 'Statusdokumen', 'v_rekom'),
			'kibImtaUploadNilais19' => array(self::BELONGS_TO, 'Statusdokumen', 'v_imtakemnaker'),
			'kibImtaUploadNilais20' => array(self::BELONGS_TO, 'Statusdokumen', 'v_suratkontakkerja'),
			'kibImtaUploadNilais21' => array(self::BELONGS_TO, 'Statusdokumen', 'v_hasilpenilaianijazah'),
			'kibImtaUploadNilais22' => array(self::BELONGS_TO, 'Statusdokumen', 'v_laporankegiatanproses'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'nilai_imta_id' => 'Nilai imta',
			'ib_imta_id' => 'Ib imta',
			'created_by' => 'Created By',
			'create_at' => 'Create At',
			'update_at' => 'Update At',
			'update_by' => 'Update By',
			'v_surat' => 'Surat Pengajuan',
			'v_kuasa' => 'Surat Kuasa',
			'v_nilek' => 'Dokumen Nilek',
			'v_kurikulum' => 'Kurikulum',
			'v_aktanotaris' => 'Akta Notaris',
			'v_pengesahankumham' => 'Pengesahan Kumham',
			'v_domisili' => 'Keterangan Domisili',
			'v_skrptka' => 'SK RPTKA',
			'v_ijinoperasional' => 'Izin operasional',
			'v_rekapsiswadanptk' => 'Berkas rekap siswa & PTK',
			'v_rekomendasidinas' => 'Rekomendasi Dinas',
			'v_alasan' => 'Alasan Ikut imta',
			'v_jaminan' => 'Keterangan Jaminan',
			'v_paspor' => 'Paspor',
			'v_cv' => 'Daftar Riwayat Hidup',
			'v_foto' => 'Foto',
			'v_ijazah' => 'Ijazah',
			'v_sehat' => 'Keterangan Sehat',
			'v_pernyataan' => 'Pernyataan Propaganda',
			'v_stm' => 'Surat Keterangan Tanda Melapor',
			'v_kitas' => 'Kartu Izin Tinggal Terbatas',
			'v_rekom' => 'Rekom IMTA',
			'v_imtakemnaker' => 'IMTA dari Kemnaker',
			'v_suratkontakkerja' => 'Surat Kontak Kerja',
			'v_hasilpenilaianijazah' => 'Hasil Penilaian Ijazah',
			'v_laporankegiatanproses' => 'Laporan kegiatan proses pengajaran',
			'global_reason' => 'Keterangan',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('nilai_imta_id',$this->nilai_imta_id);
		$criteria->compare('ib_imta_id',$this->ib_imta_id);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('create_at',$this->create_at,true);
		$criteria->compare('update_at',$this->update_at,true);
		$criteria->compare('update_by',$this->update_by);
		$criteria->compare('v_surat',$this->v_surat);
		$criteria->compare('v_kuasa',$this->v_kuasa);
		$criteria->compare('v_nilek',$this->v_nilek);
		$criteria->compare('v_kurikulum',$this->v_kurikulum);
		$criteria->compare('v_aktanotaris',$this->v_aktanotaris);
		$criteria->compare('v_pengesahankumham',$this->v_pengesahankumham);
		$criteria->compare('v_domisili',$this->v_domisili);
		$criteria->compare('v_skrptka',$this->v_skrptka);
		$criteria->compare('v_ijinoperasional',$this->v_ijinoperasional);
		$criteria->compare('v_rekapsiswadanptk',$this->v_rekapsiswadanptk);
		$criteria->compare('v_rekomendasidinas',$this->v_rekomendasidinas);
		$criteria->compare('v_alasan',$this->v_alasan);
		$criteria->compare('v_jaminan',$this->v_jaminan);
		$criteria->compare('v_paspor',$this->v_paspor);
		$criteria->compare('v_cv',$this->v_cv);
		$criteria->compare('v_foto',$this->v_foto);
		$criteria->compare('v_ijazah',$this->v_ijazah);
		$criteria->compare('v_sehat',$this->v_sehat);
		$criteria->compare('v_pernyataan',$this->v_pernyataan);
		$criteria->compare('v_stm',$this->v_stm);
		$criteria->compare('v_kitas',$this->v_kitas);
		$criteria->compare('v_rekom',$this->v_rekom);
		$criteria->compare('v_imtakemnaker',$this->v_imtakemnaker);
		$criteria->compare('v_suratkontakkerja',$this->v_suratkontakkerja);
		$criteria->compare('v_hasilpenilaianijazah',$this->v_hasilpenilaianijazah);
		$criteria->compare('v_laporankegiatanproses',$this->v_laporankegiatanproses);
		$criteria->compare('global_reason',$this->global_reason,true);

		return new CActiveDataProvider($this, array(
				'criteria'=>$criteria,
			));
		}
        protected function beforeValidate() {
			if(empty($this->created_by)) { // Set to current user:
				$this->created_by = Yii::app()->user->id;
			}
			if(empty($this->create_at)) { // Set to current timedate:
				$this->create_at = new CDbExpression('NOW()');
			}
			$this->update_at = new CDbExpression('NOW()');
			$this->update_by = Yii::app()->user->id;
			return parent::beforeValidate();
		}
        protected function afterSave(){
            if(
                    (
                    $this->v_surat&&
                    $this->v_kuasa&&
                    $this->v_nilek&&
                    $this->v_kurikulum&&
                    $this->v_aktanotaris&&
                    $this->v_pengesahankumham&&
                    $this->v_domisili&&
                    $this->v_skrptka&&
                    $this->v_ijinoperasional&&
                    $this->v_rekapsiswadanptk&&
                    $this->v_rekomendasidinas&&
                    $this->v_alasan&&
                    $this->v_jaminan&&
                    $this->v_paspor&&
                    $this->v_cv&&
                    $this->v_foto&&
                    $this->v_ijazah&&
                    $this->v_sehat&&
                    $this->v_pernyataan
 
                    )==true&&
                    $this->update_by==1){
                imta::model()->updateByPk($this->ib_imta_id,array('ib_imta_status'=>47));
            }
            
            if(
                    (
                    $this->v_surat&&
                    $this->v_kuasa&&
                    $this->v_nilek&&
                    $this->v_kurikulum&&
                    $this->v_aktanotaris&&
                    $this->v_pengesahankumham&&
                    $this->v_domisili&&
                    $this->v_skrptka&&
                    $this->v_ijinoperasional&&
                    $this->v_rekapsiswadanptk&&
                    $this->v_rekomendasidinas&&
                    $this->v_alasan&&
                    $this->v_jaminan&&
                    $this->v_paspor&&
                    $this->v_cv&&
                    $this->v_foto&&
                    $this->v_ijazah&&
                    $this->v_sehat&&
                    $this->v_pernyataan
                    )==false&&
                    $this->update_by==1){
                imta::model()->updateByPk($this->ib_imta_id,array('ib_imta_status'=>107));
            }


        }
}