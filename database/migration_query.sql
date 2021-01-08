SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

TRUNCATE tdd.projects;
INSERT INTO tdd.projects
SELECT
id,
LEFT(uuid(),36) as uuid,
pipol_code as code,
title,
ifnull(slug, concat(replace(trim(lower(title)), ' ', '-'),'-',id)),
type_id as pap_type_id,
regular as regular_program,
description,
expected_outputs,
spatial_coverage_id,
iccable,
pip,
research,
cip,
cip_type_id,
trip,
rdip,
rdc_required as rdc_endorsement_required,
rdc_endorsed,
rdc_endorsed_date,
null as other_infrastructure,
implementation_risk as risk,
pdp_chapter_id,
false as no_pdp_indicator,
gad_id,
target_start_year,
target_end_year,
has_fs,
has_row,
has_rap,
employment_generated,
main_funding_source_id as funding_source_id,
implementation_mode_id,
null as other_fs,
project_status_id,
updates,
updates_date,
uacs_code,
tier_id,
created_by,
updated_by,
deleted_by,
created_at,
updated_at,
deleted_at,
typology_id as pip_typology_id,
null as approval_level_id,
null as approval_date,
project_preparation_document_id as preparation_document_id,
null as preparation_document_others,
technical_readiness_id as readiness_level_id
FROM ipms.projects;

TRUNCATE tdd.allocations;
INSERT INTO tdd.allocations
SELECT
null AS id,
LEFT(uuid(),36) as uuid,
id AS project_id,
gaa_2016 AS y2016,
gaa_2017 AS y2017,
gaa_2018 AS y2018,
gaa_2019 AS y2019,
gaa_2020 AS y2020,
gaa_2021 AS y2021,
gaa_2022 AS y2022,
gaa_2023 AS y2023,
gaa_2024 AS y2024,
gaa_2025 AS y2025,
created_at,
updated_at
FROM ipms.projects;

TRUNCATE tdd.disbursements;
INSERT INTO tdd.disbursements
SELECT
null AS id,
LEFT(uuid(),36) as uuid,
id AS project_id,
disbursement_2016 AS y2016,
disbursement_2017 AS y2017,
disbursement_2018 AS y2018,
disbursement_2019 AS y2019,
disbursement_2020 AS y2020,
disbursement_2021 AS y2021,
disbursement_2022 AS y2022,
disbursement_2023 AS y2023,
disbursement_2024 AS y2024,
disbursement_2025 AS y2025,
created_at,
updated_at
FROM ipms.projects;

TRUNCATE tdd.neps;
INSERT INTO tdd.neps
SELECT
null AS id,
LEFT(uuid(),36) as uuid,
id AS project_id,
nep_2016 AS y2016,
nep_2017 AS y2017,
nep_2018 AS y2018,
nep_2019 AS y2019,
nep_2020 AS y2020,
nep_2021 AS y2021,
nep_2022 AS y2022,
nep_2023 AS y2023,
nep_2024 AS y2024,
nep_2025 AS y2025,
created_at,
updated_at
FROM ipms.projects;

TRUNCATE tdd.basis_project;
INSERT INTO tdd.basis_project
SELECT
basis_id AS basis_id,
project_id AS project_id,
created_at,
updated_at
FROM ipms.project_basis;

TRUNCATE tdd.project_sdg;
INSERT INTO tdd.project_sdg
SELECT
sdg_id AS sdg_id,
project_id AS project_id,
created_at,
updated_at
FROM ipms.project_sdg;

TRUNCATE tdd.project_region;
INSERT INTO tdd.project_region
SELECT
region_id AS region_id,
project_id AS project_id,
null AS created_at,
null AS updated_at
FROM ipms.project_region;

-- needs rework
SET FOREIGN_KEY_CHECKS=0;
TRUNCATE tdd.infrastructure_subsector_project;
INSERT INTO tdd.infrastructure_subsector_project
SELECT
infra_subsector_id as is_id,
project_id as project_id,
created_at,
updated_at
FROM ipms.infrastructure_subsector_project;

TRUNCATE tdd.funding_source_project;
INSERT INTO tdd.funding_source_project
SELECT
funding_source_id,
project_id as project_id,
null as created_at,
null as updated_at
FROM ipms.project_funding_source;

TRUNCATE tdd.funding_institution_project;
INSERT INTO tdd.funding_institution_project
SELECT
funding_institution_id,
id as project_id,
created_at,
updated_at
FROM ipms.projects
WHERE id IS NOT NULL AND funding_institution_id IS NOT NULL;

truncate tdd.feasibility_studies;
insert into tdd.feasibility_studies
SELECT
null as id,
LEFT(uuid(),36) as uuid,
id as project_id,
fs_assistance as needs_assistance,
ifnull(fs_status_id, 0) as fs_status_id,
0 as y2016,
ifnull(fs_target_2017, 0) as y2017,
ifnull(fs_target_2018, 0) as y2018,
ifnull(fs_target_2019, 0) as y2019,
ifnull(fs_target_2020, 0) as y2020,
ifnull(fs_target_2021, 0) as y2021,
ifnull(fs_target_2022, 0) as y2022,
ifnull(fs_target_2023, 0) as y2023,
ifnull(fs_target_2024, 0) as y2024,
ifnull(fs_target_2025, 0) as y2025,
created_at as created_at,
updated_at as updated_at,
fs_start_date as fs_start_date,
fs_end_date as fs_end_date
from ipms.projects;

truncate tdd.right_of_ways;
insert into tdd.right_of_ways
SELECT
null as id,
LEFT(uuid(),36) as uuid,
id as project_id,
0 as y2016,
ifnull(row_target_2017, 0) as y2017,
ifnull(row_target_2018, 0) as y2018,
ifnull(row_target_2019, 0) as y2019,
ifnull(row_target_2020, 0) as y2020,
ifnull(row_target_2021, 0) as y2021,
ifnull(row_target_2022, 0) as y2022,
ifnull(row_target_2023, 0) as y2023,
ifnull(row_target_2024, 0) as y2024,
ifnull(row_target_2025, 0) as y2025,
row_affected as affected_households,
created_at as created_at,
updated_at as updated_at
from ipms.projects;

truncate tdd.resettlement_action_plans;
insert into tdd.resettlement_action_plans
SELECT
null as id,
LEFT(uuid(),36) as uuid,
id as project_id,
0 as y2016,
ifnull(rap_target_2017, 0) as y2017,
ifnull(rap_target_2018, 0) as y2018,
ifnull(rap_target_2019, 0) as y2019,
ifnull(rap_target_2020, 0) as y2020,
ifnull(rap_target_2021, 0) as y2021,
ifnull(rap_target_2022, 0) as y2022,
ifnull(rap_target_2023, 0) as y2023,
ifnull(rap_target_2024, 0) as y2024,
ifnull(rap_target_2025, 0) as y2025,
rap_affected as affected_households,
created_at as created_at,
updated_at as updated_at
from ipms.projects;

truncate tdd.region_investments;
insert into tdd.region_investments
SELECT
    null as id,
    LEFT(uuid(),36) as uuid,
    project_id as project_id,
    region_id as region_id,
    investment_target_2016 as y2016,
    investment_target_2017 as y2017,
    investment_target_2018 as y2018,
    investment_target_2019 as y2019,
    investment_target_2020 as y2020,
    investment_target_2021 as y2021,
    investment_target_2022 as y2022,
    investment_target_2023 as y2023,
    investment_target_2024 as y2024,
    investment_target_2025 as y2025,
    created_at as created_at,
    updated_at as updated_at
from ipms.region_financials;

truncate tdd.region_infrastructures;
insert into tdd.region_infrastructures
SELECT
    null as id,
    LEFT(uuid(),36) as uuid,
    project_id as project_id,
    region_id as region_id,
    infrastructure_target_2016 as y2016,
    infrastructure_target_2017 as y2017,
    infrastructure_target_2018 as y2018,
    infrastructure_target_2019 as y2019,
    infrastructure_target_2020 as y2020,
    infrastructure_target_2021 as y2021,
    infrastructure_target_2022 as y2022,
    infrastructure_target_2023 as y2023,
    infrastructure_target_2024 as y2024,
    infrastructure_target_2025 as y2025,
    created_at as created_at,
    updated_at as updated_at
from ipms.region_financials;

truncate tdd.fs_investments;
insert into tdd.fs_investments
SELECT
    null as id,
    LEFT(uuid(),36) as uuid,
    project_id as project_id,
    funding_source_id as fs_id,
    investment_target_2016 as y2016,
    investment_target_2017 as y2017,
    investment_target_2018 as y2018,
    investment_target_2019 as y2019,
    investment_target_2020 as y2020,
    investment_target_2021 as y2021,
    investment_target_2022 as y2022,
    investment_target_2023 as y2023,
    investment_target_2024 as y2024,
    investment_target_2025 as y2025,
    created_at as created_at,
    updated_at as updated_at
from ipms.funding_source_financials;

truncate tdd.fs_infrastructures;
insert into tdd.fs_infrastructures
SELECT
    null as id,
    LEFT(uuid(),36) as uuid,
    project_id as project_id,
    funding_source_id as fs_id,
    infrastructure_target_2016 as y2016,
    infrastructure_target_2017 as y2017,
    infrastructure_target_2018 as y2018,
    infrastructure_target_2019 as y2019,
    infrastructure_target_2020 as y2020,
    infrastructure_target_2021 as y2021,
    infrastructure_target_2022 as y2022,
    infrastructure_target_2023 as y2023,
    infrastructure_target_2024 as y2024,
    infrastructure_target_2025 as y2025,
    created_at as created_at,
    updated_at as updated_at
from ipms.funding_source_financials;

truncate tdd.project_ten_point_agenda;
insert into tdd.project_ten_point_agenda
select *
from ipms.project_ten_point_agenda;

truncate tdd.pdp_chapter_project;
insert into tdd.pdp_chapter_project
select *
from ipms.project_pdp_chapter;

truncate tdd.basis_project;
insert into tdd.basis_project
select *
from ipms.project_basis;

truncate tdd.prerequisite_project;
insert into tdd.prerequisite_project
select
project_id as project_id,
tr_id as prerequisite_id,
null as created_at,
null as updated_at
from ipms.project_technical_readiness;

truncate tdd.pdp_indicator_project;
insert into tdd.pdp_indicator_project
select
pdp_indicator_id as pi_id,
project_id,
null as created_at,
null as updated_at
from ipms.project_pdp_indicators;

truncate tdd.pdp_indicators;
insert into tdd.pdp_indicators
select
id,
LEFT(uuid(),36) as uuid,
name as name,
null as description,
replace(trim(lower(name)), ' ', '-') as slug,
updated_at,
created_at,
null as parent_id
from ipms.pdp_indicators;

SET FOREIGN_KEY_CHECKS=1;
COMMIT;