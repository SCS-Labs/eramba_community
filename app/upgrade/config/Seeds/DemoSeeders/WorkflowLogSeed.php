<?php
use Phinx\Seed\AbstractSeed;

/**
 * WorkflowLog seed.
 */
class WorkflowLogSeed extends AbstractSeed
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
                'model' => 'BusinessUnit',
                'foreign_key' => '2',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-10 13:38:32',
                'modified' => '2017-04-10 13:38:32',
            ],
            [
                'id' => '2',
                'model' => 'BusinessUnit',
                'foreign_key' => '3',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-10 13:39:00',
                'modified' => '2017-04-10 13:39:00',
            ],
            [
                'id' => '3',
                'model' => 'BusinessUnit',
                'foreign_key' => '4',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-10 13:39:21',
                'modified' => '2017-04-10 13:39:21',
            ],
            [
                'id' => '4',
                'model' => 'SecurityService',
                'foreign_key' => '1',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-10 14:01:21',
                'modified' => '2017-04-10 14:01:21',
            ],
            [
                'id' => '5',
                'model' => 'SecurityService',
                'foreign_key' => '2',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-10 14:02:00',
                'modified' => '2017-04-10 14:02:00',
            ],
            [
                'id' => '6',
                'model' => 'SecurityService',
                'foreign_key' => '3',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-10 14:02:26',
                'modified' => '2017-04-10 14:02:26',
            ],
            [
                'id' => '7',
                'model' => 'SecurityService',
                'foreign_key' => '5',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-10 14:02:57',
                'modified' => '2017-04-10 14:02:57',
            ],
            [
                'id' => '8',
                'model' => 'SecurityService',
                'foreign_key' => '6',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-10 14:03:19',
                'modified' => '2017-04-10 14:03:19',
            ],
            [
                'id' => '9',
                'model' => 'SecurityService',
                'foreign_key' => '11',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-10 14:05:08',
                'modified' => '2017-04-10 14:05:08',
            ],
            [
                'id' => '10',
                'model' => 'SecurityService',
                'foreign_key' => '11',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-10 14:24:41',
                'modified' => '2017-04-10 14:24:41',
            ],
            [
                'id' => '11',
                'model' => 'ComplianceManagement',
                'foreign_key' => '15',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-10 14:28:17',
                'modified' => '2017-04-10 14:28:17',
            ],
            [
                'id' => '12',
                'model' => 'PolicyException',
                'foreign_key' => '1',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-10 14:44:08',
                'modified' => '2017-04-10 14:44:08',
            ],
            [
                'id' => '13',
                'model' => 'Asset',
                'foreign_key' => '1',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-10 15:51:22',
                'modified' => '2017-04-10 15:51:22',
            ],
            [
                'id' => '14',
                'model' => 'Asset',
                'foreign_key' => '2',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-10 15:51:38',
                'modified' => '2017-04-10 15:51:38',
            ],
            [
                'id' => '15',
                'model' => 'Asset',
                'foreign_key' => '3',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-10 15:51:49',
                'modified' => '2017-04-10 15:51:49',
            ],
            [
                'id' => '16',
                'model' => 'Asset',
                'foreign_key' => '4',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-10 15:52:01',
                'modified' => '2017-04-10 15:52:01',
            ],
            [
                'id' => '17',
                'model' => 'Asset',
                'foreign_key' => '4',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-10 15:52:14',
                'modified' => '2017-04-10 15:52:14',
            ],
            [
                'id' => '18',
                'model' => 'Asset',
                'foreign_key' => '5',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-10 15:52:22',
                'modified' => '2017-04-10 15:52:22',
            ],
            [
                'id' => '19',
                'model' => 'Asset',
                'foreign_key' => '6',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-10 15:52:32',
                'modified' => '2017-04-10 15:52:32',
            ],
            [
                'id' => '20',
                'model' => 'Asset',
                'foreign_key' => '7',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-10 15:52:43',
                'modified' => '2017-04-10 15:52:43',
            ],
            [
                'id' => '21',
                'model' => 'Asset',
                'foreign_key' => '8',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-10 15:53:13',
                'modified' => '2017-04-10 15:53:13',
            ],
            [
                'id' => '22',
                'model' => 'Asset',
                'foreign_key' => '9',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-10 15:53:24',
                'modified' => '2017-04-10 15:53:24',
            ],
            [
                'id' => '23',
                'model' => 'Asset',
                'foreign_key' => '10',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-10 15:53:36',
                'modified' => '2017-04-10 15:53:36',
            ],
            [
                'id' => '24',
                'model' => 'Asset',
                'foreign_key' => '11',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-10 15:53:46',
                'modified' => '2017-04-10 15:53:46',
            ],
            [
                'id' => '25',
                'model' => 'Asset',
                'foreign_key' => '11',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-10 15:53:56',
                'modified' => '2017-04-10 15:53:56',
            ],
            [
                'id' => '26',
                'model' => 'Asset',
                'foreign_key' => '12',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-10 15:54:06',
                'modified' => '2017-04-10 15:54:06',
            ],
            [
                'id' => '27',
                'model' => 'Asset',
                'foreign_key' => '13',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-10 15:54:16',
                'modified' => '2017-04-10 15:54:16',
            ],
            [
                'id' => '28',
                'model' => 'SecurityService',
                'foreign_key' => '1',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-11 12:44:13',
                'modified' => '2017-04-11 12:44:13',
            ],
            [
                'id' => '29',
                'model' => 'SecurityServiceAudit',
                'foreign_key' => '26',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-11 12:44:33',
                'modified' => '2017-04-11 12:44:33',
            ],
            [
                'id' => '30',
                'model' => 'SecurityService',
                'foreign_key' => '1',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-11 12:45:26',
                'modified' => '2017-04-11 12:45:26',
            ],
            [
                'id' => '31',
                'model' => 'SecurityService',
                'foreign_key' => '3',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-11 12:45:47',
                'modified' => '2017-04-11 12:45:47',
            ],
            [
                'id' => '32',
                'model' => 'SecurityService',
                'foreign_key' => '2',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-11 12:46:15',
                'modified' => '2017-04-11 12:46:15',
            ],
            [
                'id' => '33',
                'model' => 'SecurityServiceAudit',
                'foreign_key' => '2',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-11 12:46:45',
                'modified' => '2017-04-11 12:46:45',
            ],
            [
                'id' => '34',
                'model' => 'SecurityServiceMaintenance',
                'foreign_key' => '1',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-11 12:47:21',
                'modified' => '2017-04-11 12:47:21',
            ],
            [
                'id' => '35',
                'model' => 'SecurityService',
                'foreign_key' => '4',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-11 12:47:55',
                'modified' => '2017-04-11 12:47:55',
            ],
            [
                'id' => '36',
                'model' => 'SecurityServiceMaintenance',
                'foreign_key' => '2',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-11 12:48:22',
                'modified' => '2017-04-11 12:48:22',
            ],
            [
                'id' => '37',
                'model' => 'SecurityServiceAudit',
                'foreign_key' => '4',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-11 12:48:46',
                'modified' => '2017-04-11 12:48:46',
            ],
            [
                'id' => '38',
                'model' => 'SecurityService',
                'foreign_key' => '7',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-11 12:49:19',
                'modified' => '2017-04-11 12:49:19',
            ],
            [
                'id' => '39',
                'model' => 'SecurityServiceAudit',
                'foreign_key' => '7',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-11 12:49:38',
                'modified' => '2017-04-11 12:49:38',
            ],
            [
                'id' => '40',
                'model' => 'SecurityService',
                'foreign_key' => '8',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-11 12:50:42',
                'modified' => '2017-04-11 12:50:42',
            ],
            [
                'id' => '41',
                'model' => 'SecurityServiceAudit',
                'foreign_key' => '8',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-11 12:51:11',
                'modified' => '2017-04-11 12:51:11',
            ],
            [
                'id' => '42',
                'model' => 'SecurityService',
                'foreign_key' => '9',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-11 12:55:09',
                'modified' => '2017-04-11 12:55:09',
            ],
            [
                'id' => '43',
                'model' => 'Risk',
                'foreign_key' => '1',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-11 14:07:10',
                'modified' => '2017-04-11 14:07:10',
            ],
            [
                'id' => '44',
                'model' => 'Risk',
                'foreign_key' => '1',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-11 16:42:39',
                'modified' => '2017-04-11 16:42:39',
            ],
            [
                'id' => '45',
                'model' => 'AwarenessProgram',
                'foreign_key' => '1',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-11 16:46:18',
                'modified' => '2017-04-11 16:46:18',
            ],
            [
                'id' => '46',
                'model' => 'AwarenessProgram',
                'foreign_key' => '1',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-11 16:48:53',
                'modified' => '2017-04-11 16:48:53',
            ],
            [
                'id' => '47',
                'model' => 'SecurityService',
                'foreign_key' => '2',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-11 16:56:28',
                'modified' => '2017-04-11 16:56:28',
            ],
            [
                'id' => '48',
                'model' => 'AssetClassification',
                'foreign_key' => '1',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-12 21:43:29',
                'modified' => '2017-04-12 21:43:29',
            ],
            [
                'id' => '49',
                'model' => 'Asset',
                'foreign_key' => '1',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-13 18:29:51',
                'modified' => '2017-04-13 18:29:51',
            ],
            [
                'id' => '50',
                'model' => 'Asset',
                'foreign_key' => '1',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-13 18:31:02',
                'modified' => '2017-04-13 18:31:02',
            ],
            [
                'id' => '51',
                'model' => 'AssetClassification',
                'foreign_key' => '1',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-13 18:32:02',
                'modified' => '2017-04-13 18:32:02',
            ],
            [
                'id' => '52',
                'model' => 'AssetClassification',
                'foreign_key' => '2',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-13 18:32:11',
                'modified' => '2017-04-13 18:32:11',
            ],
            [
                'id' => '53',
                'model' => 'AssetClassification',
                'foreign_key' => '3',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-13 18:32:18',
                'modified' => '2017-04-13 18:32:18',
            ],
            [
                'id' => '54',
                'model' => 'AssetClassification',
                'foreign_key' => '4',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-13 18:32:26',
                'modified' => '2017-04-13 18:32:26',
            ],
            [
                'id' => '55',
                'model' => 'AssetClassification',
                'foreign_key' => '5',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-13 18:32:33',
                'modified' => '2017-04-13 18:32:33',
            ],
            [
                'id' => '56',
                'model' => 'AssetClassification',
                'foreign_key' => '6',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-13 18:32:43',
                'modified' => '2017-04-13 18:32:43',
            ],
            [
                'id' => '57',
                'model' => 'AssetClassification',
                'foreign_key' => '8',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-13 18:32:59',
                'modified' => '2017-04-13 18:32:59',
            ],
            [
                'id' => '58',
                'model' => 'AssetClassification',
                'foreign_key' => '9',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-13 18:33:07',
                'modified' => '2017-04-13 18:33:07',
            ],
            [
                'id' => '59',
                'model' => 'Asset',
                'foreign_key' => '1',
                'user_id' => '1',
                'status' => '0',
                'ip' => '185.23.123.34',
                'created' => '2017-04-13 18:33:34',
                'modified' => '2017-04-13 18:33:34',
            ],
        ];

        $table = $this->table('workflow_logs');
        $table->insert($data)->save();
    }
}