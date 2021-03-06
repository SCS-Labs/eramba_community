<?php
use Phinx\Seed\AbstractSeed;

/**
 * Asset seed.
 */
class AssetSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => '1',
                'name' => 'Finance APP Systems - Finance',
                'description' => '',
                'asset_label_id' => '1',
                'asset_media_type_id' => '5',
                'asset_owner_id' => '2',
                'asset_guardian_id' => '3',
                'asset_user_id' => '2',
                'review' => '2017-05-14',
                'expired_reviews' => '0',
                'security_incident_open_count' => '0',
                'workflow_owner_id' => '1',
                'workflow_status' => '4',
                'created' => '2017-04-10 15:50:45',
                'modified' => '2017-04-13 18:33:51',
                'deleted' => '0',
                'deleted_date' => NULL,
            ],
            [
                'id' => '2',
                'name' => 'Employee Personal Information',
                'description' => '',
                'asset_label_id' => '1',
                'asset_media_type_id' => '1',
                'asset_owner_id' => '3',
                'asset_guardian_id' => '3',
                'asset_user_id' => '2',
                'review' => '2017-05-14',
                'expired_reviews' => '0',
                'security_incident_open_count' => '0',
                'workflow_owner_id' => '1',
                'workflow_status' => '4',
                'created' => '2017-04-10 15:50:45',
                'modified' => '2017-04-10 15:51:44',
                'deleted' => '0',
                'deleted_date' => NULL,
            ],
            [
                'id' => '3',
                'name' => 'Finance APP Systems - HR',
                'description' => '',
                'asset_label_id' => '1',
                'asset_media_type_id' => '5',
                'asset_owner_id' => '3',
                'asset_guardian_id' => '3',
                'asset_user_id' => '2',
                'review' => '2017-05-14',
                'expired_reviews' => '0',
                'security_incident_open_count' => '0',
                'workflow_owner_id' => '1',
                'workflow_status' => '4',
                'created' => '2017-04-10 15:50:45',
                'modified' => '2017-04-10 15:51:55',
                'deleted' => '0',
                'deleted_date' => NULL,
            ],
            [
                'id' => '4',
                'name' => 'Customer Data',
                'description' => '',
                'asset_label_id' => '1',
                'asset_media_type_id' => '1',
                'asset_owner_id' => '4',
                'asset_guardian_id' => '3',
                'asset_user_id' => '2',
                'review' => '2017-05-14',
                'expired_reviews' => '0',
                'security_incident_open_count' => '0',
                'workflow_owner_id' => '1',
                'workflow_status' => '4',
                'created' => '2017-04-10 15:50:45',
                'modified' => '2017-04-10 15:52:17',
                'deleted' => '0',
                'deleted_date' => NULL,
            ],
            [
                'id' => '5',
                'name' => 'Windows Systems - Corporate',
                'description' => '',
                'asset_label_id' => '2',
                'asset_media_type_id' => '5',
                'asset_owner_id' => '4',
                'asset_guardian_id' => '3',
                'asset_user_id' => '2',
                'review' => '2017-05-14',
                'expired_reviews' => '0',
                'security_incident_open_count' => '0',
                'workflow_owner_id' => '1',
                'workflow_status' => '4',
                'created' => '2017-04-10 15:50:45',
                'modified' => '2017-04-10 15:52:27',
                'deleted' => '0',
                'deleted_date' => NULL,
            ],
            [
                'id' => '6',
                'name' => 'Linux Systems - Corporate',
                'description' => '',
                'asset_label_id' => '1',
                'asset_media_type_id' => '5',
                'asset_owner_id' => '4',
                'asset_guardian_id' => '3',
                'asset_user_id' => '2',
                'review' => '2017-05-14',
                'expired_reviews' => '0',
                'security_incident_open_count' => '0',
                'workflow_owner_id' => '1',
                'workflow_status' => '4',
                'created' => '2017-04-10 15:50:45',
                'modified' => '2017-04-10 15:52:37',
                'deleted' => '0',
                'deleted_date' => NULL,
            ],
            [
                'id' => '7',
                'name' => 'Mobile Phones',
                'description' => '',
                'asset_label_id' => '1',
                'asset_media_type_id' => '4',
                'asset_owner_id' => '4',
                'asset_guardian_id' => '3',
                'asset_user_id' => '2',
                'review' => '2017-05-14',
                'expired_reviews' => '0',
                'security_incident_open_count' => '0',
                'workflow_owner_id' => '1',
                'workflow_status' => '4',
                'created' => '2017-04-10 15:50:45',
                'modified' => '2017-04-10 15:52:48',
                'deleted' => '0',
                'deleted_date' => NULL,
            ],
            [
                'id' => '8',
                'name' => 'Payment Apps',
                'description' => '',
                'asset_label_id' => '2',
                'asset_media_type_id' => '5',
                'asset_owner_id' => '4',
                'asset_guardian_id' => '3',
                'asset_user_id' => '2',
                'review' => '2017-05-14',
                'expired_reviews' => '0',
                'security_incident_open_count' => '0',
                'workflow_owner_id' => '1',
                'workflow_status' => '4',
                'created' => '2017-04-10 15:50:45',
                'modified' => '2017-04-10 15:53:18',
                'deleted' => '0',
                'deleted_date' => NULL,
            ],
            [
                'id' => '9',
                'name' => 'NDA Contracts',
                'description' => '',
                'asset_label_id' => '1',
                'asset_media_type_id' => '1',
                'asset_owner_id' => '2',
                'asset_guardian_id' => '3',
                'asset_user_id' => '2',
                'review' => '2017-01-31',
                'expired_reviews' => '0',
                'security_incident_open_count' => '0',
                'workflow_owner_id' => '1',
                'workflow_status' => '4',
                'created' => '2017-04-10 15:50:46',
                'modified' => '2017-04-10 15:53:30',
                'deleted' => '0',
                'deleted_date' => NULL,
            ],
            [
                'id' => '10',
                'name' => 'Laptops',
                'description' => '',
                'asset_label_id' => '1',
                'asset_media_type_id' => '4',
                'asset_owner_id' => '4',
                'asset_guardian_id' => '3',
                'asset_user_id' => '2',
                'review' => '2017-01-31',
                'expired_reviews' => '0',
                'security_incident_open_count' => '0',
                'workflow_owner_id' => '1',
                'workflow_status' => '4',
                'created' => '2017-04-10 15:50:46',
                'modified' => '2017-04-10 15:53:41',
                'deleted' => '0',
                'deleted_date' => NULL,
            ],
            [
                'id' => '11',
                'name' => 'Desktop Computers',
                'description' => '',
                'asset_label_id' => '1',
                'asset_media_type_id' => '4',
                'asset_owner_id' => '4',
                'asset_guardian_id' => '3',
                'asset_user_id' => '2',
                'review' => '2017-01-31',
                'expired_reviews' => '0',
                'security_incident_open_count' => '0',
                'workflow_owner_id' => '1',
                'workflow_status' => '4',
                'created' => '2017-04-10 15:50:46',
                'modified' => '2017-04-10 15:53:59',
                'deleted' => '0',
                'deleted_date' => NULL,
            ],
            [
                'id' => '12',
                'name' => 'Wiki - Public',
                'description' => '',
                'asset_label_id' => '1',
                'asset_media_type_id' => '5',
                'asset_owner_id' => '4',
                'asset_guardian_id' => '3',
                'asset_user_id' => '2',
                'review' => '2017-01-31',
                'expired_reviews' => '0',
                'security_incident_open_count' => '0',
                'workflow_owner_id' => '1',
                'workflow_status' => '4',
                'created' => '2017-04-10 15:50:46',
                'modified' => '2017-04-10 15:54:11',
                'deleted' => '0',
                'deleted_date' => NULL,
            ],
            [
                'id' => '13',
                'name' => 'wiki - Internal',
                'description' => '',
                'asset_label_id' => '1',
                'asset_media_type_id' => '5',
                'asset_owner_id' => '4',
                'asset_guardian_id' => '3',
                'asset_user_id' => '2',
                'review' => '2017-01-31',
                'expired_reviews' => '1',
                'security_incident_open_count' => '0',
                'workflow_owner_id' => '1',
                'workflow_status' => '4',
                'created' => '2017-04-10 15:50:46',
                'modified' => '2017-04-10 15:54:44',
                'deleted' => '0',
                'deleted_date' => NULL,
            ],
        ];

        $table = $this->table('assets');
        $table->insert($data)->save();
    }
}
