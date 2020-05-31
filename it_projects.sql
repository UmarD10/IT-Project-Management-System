CREATE TABLE projects (
ProjectId    INTEGER NOT NULL,
ProjectName  VARCHAR(50) NOT NULL,
Description     VARCHAR(50) NOT NULL,
Requirements     VARCHAR(250),
CONSTRAINT projects_PK PRIMARY KEY (ProjectId)
);

CREATE TABLE staff (
StaffId      INTEGER NOT NULL,
ProjectId    INTEGER NOT NULL,
ProjectTeam  VARCHAR(50) NOT NULL,
Training      TEXT,
Support        TEXT,
CONSTRAINT staff_PK PRIMARY KEY (staffId),
CONSTRAINT staff_projects_FK FOREIGN KEY (ProjectId) REFERENCES projects(ProjectId)
);

CREATE TABLE activities (
ActivityId     INTEGER NOT NULL,
ProjectId         INTEGER NOT NULL,
ProjectName      VARCHAR(50) NOT NULL,
StartDate       DATE,
EndDate         DATE,
Implementation  TEXT,
Testing         TEXT,
Review          TEXT,
CONSTRAINT activities_PK PRIMARY KEY (ActivityId),
CONSTRAINT activities_projects_FK FOREIGN KEY (ProjectId) REFERENCES projects(ProjectId)
);

CREATE TABLE budget (
BudgetId   INTEGER NOT NULL,
ProjectId  INTEGER NOT NULL,
ProjectName      VARCHAR(50) NOT NULL,
Timescale       TEXT,
Estimation      TEXT,
CONSTRAINT budget_PK PRIMARY KEY (BudgetId),
CONSTRAINT budget_projects_FK FOREIGN KEY (ProjectId) REFERENCES projects(ProjectId)
);


CREATE TABLE organisation (
OrgId         INTEGER NOT NULL,
ProjectId     INTEGER NOT NULL,
StartDate    DATE,
EndDate      DATE,
CONSTRAINT organisation_PK PRIMARY KEY (OrgId),
CONSTRAINT organisation_projects_FK FOREIGN KEY (ProjectId) REFERENCES projects(ProjectId)
)


CREATE TABLE stakeholder (
StakeholderId   INTEGER NOT NULL,
ProjectId       INTEGER NOT NULL,
OrgID           INTEGER NOT NULL,
BudgetId        INTEGER NOT NULL,
CONSTRAINT stakeholder_PK PRIMARY KEY (StakeholderId),
CONSTRAINT stakeholder_projects_FK FOREIGN KEY (ProjectId) REFERENCES projects(ProjectId),
CONSTRAINT stakeholder_organisation_FK FOREIGN KEY (OrgId) REFERENCES organisation(OrgId),
CONSTRAINT stakeholder_budget_FK FOREIGN KEY (BudgetId) REFERENCES budget(BudgetId)
)


CREATE TABLE resources (
ResourceId   INTEGER NOT NULL,
ResourceName VARCHAR(50) NOT NULL,
ProjectId    INTEGER NOT NULL,
CONSTRAINT resources_PK PRIMARY KEY (ResourceId),
CONSTRAINT resources_projects_FK FOREIGN KEY (ProjectId) REFERENCES projects(ResourceId)
);
