=== Plugin Info ===
Instructions for using SmplfyCore functionality
https://smplfy.dev/step-by-step-using-smplfycore/

1. Add Constants
    /public/php/types/FormIds.php
    Add the form contact equal to the Form ID

2 Create an Entity
    PURPOSE: A user friendly representation of the form entry
    /public/php/entities
    Map fields
    Common entry properties do not need to be mapped as they are added by default, for example, created_by, id etcetera
    Update @property comment for each mapped field

3 Create Repository
    PURPOSE: Enables user friendly CRUD functionality for Gravity Form entries
    /public/php/repositories
    Update constructor with the entity created in Step 2

4 Update Dependency Factory with Repository
    PURPOSE: Establishes relationships between use cases and entities
    /admin/utilities/DependencyFactory.php
    Look for comment // Repositories
    Add Variable equal to new repository and pass in gravity form wrapper
    $variableRepository = new VariableRepository($gravityFormsWrapper)

5 Create a Usecase
    PURPOSE: Work being done
    /public/usecases/FOLDER/UsecaseName.php


6 Add Usecase top DependecyFactory
    PURPOSE: Instantiates the class
    /admin/DependencyFactory.php

7 Update adapters
    PURPOSE: Register action and filter hooks to be used
    /public/php/adapters
