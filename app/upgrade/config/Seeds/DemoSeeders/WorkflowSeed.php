<?php
use Phinx\Seed\AbstractSeed;

/**
 * Workflow seed.
 */
class WorkflowSeed extends AbstractSeed
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
                'model' => 'SecurityIncident',
                'name' => 'Security Incidents',
                'notifications' => '1',
                'parent_id' => NULL,
                'created' => '2015-12-19 00:00:00',
                'modified' => '2015-12-19 00:00:00',
            ],
            [
                'id' => '2',
                'model' => 'BusinessUnit',
                'name' => 'Business Units',
                'notifications' => '1',
                'parent_id' => NULL,
                'created' => '2015-12-19 00:00:00',
                'modified' => '2015-12-19 00:00:00',
            ],
            [
                'id' => '3',
                'model' => 'Legal',
                'name' => 'Legals',
                'notifications' => '1',
                'parent_id' => NULL,
                'created' => '2015-12-19 00:00:00',
                'modified' => '2015-12-19 00:00:00',
            ],
            [
                'id' => '4',
                'model' => 'ThirdParty',
                'name' => 'Third Parties',
                'notifications' => '0',
                'parent_id' => NULL,
                'created' => '2015-12-19 00:00:00',
                'modified' => '2015-12-19 00:00:00',
            ],
            [
                'id' => '5',
                'model' => 'Process',
                'name' => 'Processes',
                'notifications' => '0',
                'parent_id' => '2',
                'created' => '2015-12-19 00:00:00',
                'modified' => '2015-12-19 00:00:00',
            ],
            [
                'id' => '6',
                'model' => 'Asset',
                'name' => 'Assets',
                'notifications' => '0',
                'parent_id' => NULL,
                'created' => '2015-12-19 00:00:00',
                'modified' => '2015-12-19 00:00:00',
            ],
            [
                'id' => '7',
                'model' => 'AssetClassification',
                'name' => 'Asset Classifications',
                'notifications' => '0',
                'parent_id' => NULL,
                'created' => '2015-12-19 00:00:00',
                'modified' => '2015-12-19 00:00:00',
            ],
            [
                'id' => '8',
                'model' => 'AssetLabel',
                'name' => 'Asset Labeling',
                'notifications' => '0',
                'parent_id' => NULL,
                'created' => '2015-12-19 00:00:00',
                'modified' => '2015-12-19 00:00:00',
            ],
            [
                'id' => '9',
                'model' => 'RiskClassification',
                'name' => 'Risk Classifications',
                'notifications' => '0',
                'parent_id' => NULL,
                'created' => '2015-12-19 00:00:00',
                'modified' => '2015-12-19 00:00:00',
            ],
            [
                'id' => '10',
                'model' => 'RiskException',
                'name' => 'Risk Exceptions',
                'notifications' => '0',
                'parent_id' => NULL,
                'created' => '2015-12-19 00:00:00',
                'modified' => '2015-12-19 00:00:00',
            ],
            [
                'id' => '11',
                'model' => 'Risk',
                'name' => 'Risks',
                'notifications' => '0',
                'parent_id' => NULL,
                'created' => '2015-12-19 00:00:00',
                'modified' => '2015-12-19 00:00:00',
            ],
            [
                'id' => '12',
                'model' => 'ThirdPartyRisk',
                'name' => 'Third Party Risks',
                'notifications' => '0',
                'parent_id' => NULL,
                'created' => '2015-12-19 00:00:00',
                'modified' => '2015-12-19 00:00:00',
            ],
            [
                'id' => '13',
                'model' => 'BusinessContinuity',
                'name' => 'Business Continuities',
                'notifications' => '0',
                'parent_id' => NULL,
                'created' => '2015-12-19 00:00:00',
                'modified' => '2015-12-19 00:00:00',
            ],
            [
                'id' => '14',
                'model' => 'SecurityService',
                'name' => 'Security Services',
                'notifications' => '0',
                'parent_id' => NULL,
                'created' => '2015-12-19 00:00:00',
                'modified' => '2015-12-19 00:00:00',
            ],
            [
                'id' => '15',
                'model' => 'ServiceContract',
                'name' => 'Service Contracts',
                'notifications' => '0',
                'parent_id' => NULL,
                'created' => '2015-12-19 00:00:00',
                'modified' => '2015-12-19 00:00:00',
            ],
            [
                'id' => '16',
                'model' => 'ServiceClassification',
                'name' => 'Service Classifications',
                'notifications' => '0',
                'parent_id' => NULL,
                'created' => '2015-12-19 00:00:00',
                'modified' => '2015-12-19 00:00:00',
            ],
            [
                'id' => '17',
                'model' => 'BusinessContinuityPlan',
                'name' => 'Business Continuity Plans',
                'notifications' => '0',
                'parent_id' => NULL,
                'created' => '2015-12-19 00:00:00',
                'modified' => '2015-12-19 00:00:00',
            ],
            [
                'id' => '18',
                'model' => 'SecurityPolicy',
                'name' => 'Security Policies',
                'notifications' => '0',
                'parent_id' => NULL,
                'created' => '2015-12-19 00:00:00',
                'modified' => '2015-12-19 00:00:00',
            ],
            [
                'id' => '19',
                'model' => 'PolicyException',
                'name' => 'Policy Exceptions',
                'notifications' => '0',
                'parent_id' => NULL,
                'created' => '2015-12-19 00:00:00',
                'modified' => '2015-12-19 00:00:00',
            ],
            [
                'id' => '20',
                'model' => 'Project',
                'name' => 'Projects',
                'notifications' => '0',
                'parent_id' => NULL,
                'created' => '2015-12-19 00:00:00',
                'modified' => '2015-12-19 00:00:00',
            ],
            [
                'id' => '22',
                'model' => 'ProjectAchievement',
                'name' => 'Project Achievements',
                'notifications' => '0',
                'parent_id' => '20',
                'created' => '2015-12-19 00:00:00',
                'modified' => '2015-12-19 00:00:00',
            ],
            [
                'id' => '23',
                'model' => 'ProjectExpense',
                'name' => 'Project Expenses',
                'notifications' => '0',
                'parent_id' => '20',
                'created' => '2015-12-19 00:00:00',
                'modified' => '2015-12-19 00:00:00',
            ],
            [
                'id' => '24',
                'model' => 'SecurityServiceAudit',
                'name' => 'Security Service Audits',
                'notifications' => '0',
                'parent_id' => '14',
                'created' => '2015-12-19 00:00:00',
                'modified' => '2015-12-19 00:00:00',
            ],
            [
                'id' => '25',
                'model' => 'SecurityServiceMaintenance',
                'name' => 'Security Service Maintenances',
                'notifications' => '0',
                'parent_id' => NULL,
                'created' => '2015-12-19 00:00:00',
                'modified' => '2015-12-19 00:00:00',
            ],
            [
                'id' => '26',
                'model' => 'CompliancePackageItem',
                'name' => 'Compliance Package Items',
                'notifications' => '0',
                'parent_id' => NULL,
                'created' => '2015-12-19 00:00:00',
                'modified' => '2015-12-19 00:00:00',
            ],
            [
                'id' => '27',
                'model' => 'DataAsset',
                'name' => 'Data Assets',
                'notifications' => '0',
                'parent_id' => '6',
                'created' => '2015-12-19 00:00:00',
                'modified' => '2015-12-19 00:00:00',
            ],
            [
                'id' => '28',
                'model' => 'ComplianceManagement',
                'name' => 'Compliance Managements',
                'notifications' => '0',
                'parent_id' => NULL,
                'created' => '2015-12-19 00:00:00',
                'modified' => '2015-12-19 00:00:00',
            ],
            [
                'id' => '29',
                'model' => 'BusinessContinuityPlanAudit',
                'name' => 'Business Continuity Plan Audits',
                'notifications' => '0',
                'parent_id' => NULL,
                'created' => '2015-12-19 00:00:00',
                'modified' => '2015-12-19 00:00:00',
            ],
            [
                'id' => '31',
                'model' => 'BusinessContinuityTask',
                'name' => 'Business Continuity Tasks',
                'notifications' => '0',
                'parent_id' => NULL,
                'created' => '2015-12-19 00:00:00',
                'modified' => '2015-12-19 00:00:00',
            ],
            [
                'id' => '32',
                'model' => 'LdapConnector',
                'name' => 'LDAP Connectors',
                'notifications' => '0',
                'parent_id' => NULL,
                'created' => '2015-12-19 00:00:00',
                'modified' => '2015-12-19 00:00:00',
            ],
            [
                'id' => '33',
                'model' => 'SecurityPolicyReview',
                'name' => 'Security Policy Reviews',
                'notifications' => '0',
                'parent_id' => NULL,
                'created' => '2015-12-19 00:00:00',
                'modified' => '2015-12-19 00:00:00',
            ],
            [
                'id' => '34',
                'model' => 'RiskReview',
                'name' => 'Risk Reviews',
                'notifications' => '0',
                'parent_id' => NULL,
                'created' => '2015-12-19 00:00:00',
                'modified' => '2015-12-19 00:00:00',
            ],
            [
                'id' => '35',
                'model' => 'ThirdPartyRiskReview',
                'name' => 'ThirdPartyRisk Reviews',
                'notifications' => '0',
                'parent_id' => NULL,
                'created' => '2015-12-19 00:00:00',
                'modified' => '2015-12-19 00:00:00',
            ],
            [
                'id' => '36',
                'model' => 'BusinessContinuityReview',
                'name' => 'BusinessContinuity Reviews',
                'notifications' => '0',
                'parent_id' => NULL,
                'created' => '2015-12-19 00:00:00',
                'modified' => '2015-12-19 00:00:00',
            ],
            [
                'id' => '37',
                'model' => 'AssetReview',
                'name' => 'Asset Reviews',
                'notifications' => '0',
                'parent_id' => NULL,
                'created' => '2015-12-19 00:00:00',
                'modified' => '2015-12-19 00:00:00',
            ],
            [
                'id' => '38',
                'model' => 'SecurityIncidentStage',
                'name' => 'Security Incident Stage',
                'notifications' => '0',
                'parent_id' => NULL,
                'created' => '2015-12-19 00:00:00',
                'modified' => '2015-12-19 00:00:00',
            ],
            [
                'id' => '39',
                'model' => 'SecurityIncidentStagesSecurityIncident',
                'name' => 'Security Incident Stages Security Incident',
                'notifications' => '0',
                'parent_id' => '39',
                'created' => '2015-12-19 00:00:00',
                'modified' => '2015-12-19 00:00:00',
            ],
            [
                'id' => '41',
                'model' => 'AwarenessProgram',
                'name' => 'Awareness Programs',
                'notifications' => '0',
                'parent_id' => NULL,
                'created' => '2015-12-19 00:00:00',
                'modified' => '2015-12-19 00:00:00',
            ],
            [
                'id' => '42',
                'model' => 'ProgramScope',
                'name' => 'Scopes',
                'notifications' => '0',
                'parent_id' => NULL,
                'created' => '2015-12-19 00:00:00',
                'modified' => '2015-12-19 00:00:00',
            ],
            [
                'id' => '43',
                'model' => 'ProgramIssue',
                'name' => 'Issues',
                'notifications' => '0',
                'parent_id' => NULL,
                'created' => '2015-12-19 00:00:00',
                'modified' => '2015-12-19 00:00:00',
            ],
            [
                'id' => '44',
                'model' => 'TeamRole',
                'name' => 'Team Roles',
                'notifications' => '0',
                'parent_id' => NULL,
                'created' => '2015-12-19 00:00:00',
                'modified' => '2015-12-19 00:00:00',
            ],
            [
                'id' => '45',
                'model' => 'Goal',
                'name' => 'Goals',
                'notifications' => '0',
                'parent_id' => NULL,
                'created' => '2015-12-19 00:00:00',
                'modified' => '2015-12-19 00:00:00',
            ],
            [
                'id' => '46',
                'model' => 'GoalAudit',
                'name' => 'Goal Audits',
                'notifications' => '0',
                'parent_id' => NULL,
                'created' => '2015-12-19 00:00:00',
                'modified' => '2015-12-19 00:00:00',
            ],
            [
                'id' => '47',
                'model' => 'SecurityServiceIssue',
                'name' => 'Security Service Issues',
                'notifications' => '0',
                'parent_id' => NULL,
                'created' => '2015-12-19 00:00:00',
                'modified' => '2015-12-19 00:00:00',
            ],
        ];

        $table = $this->table('workflows');
        $table->insert($data)->save();
    }
}
