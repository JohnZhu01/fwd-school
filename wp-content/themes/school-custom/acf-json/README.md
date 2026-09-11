These ACF Local JSON files version the Staff and Student post types and their
separate category taxonomies, together with Staff Roles. ACF loads these files
from the active School theme. On another installation, use ACF's available Sync
action to update the saved post type and taxonomy settings in the admin.

Staff Categories (`staff_type`) apply only to Staff; Student Categories
(`student_type`) apply only to Students. Both support adding categories and
subcategories. Neither post type uses the built-in Post Categories taxonomy.
Existing taxonomy keys are retained so templates and assignments keep working.

These files contain configuration, not database content. They do not migrate
profiles or terms, or delete old duplicate Post Categories on another site.
