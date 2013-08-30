# ---------------------------------------------------------
# Require any additional compass plugins here.
# ---------------------------------------------------------

# Add them in place of this comment


# ---------------------------------------------------------
# Set your environment (":development" or ":production")
# Using this, we adjust a few other rules further down.
# ---------------------------------------------------------

environment = :development


# ---------------------------------------------------------
# Path rules
# ---------------------------------------------------------

http_path = "/"
css_dir = "_/css"
sass_dir = "_/sass"
images_dir = "_/media"
javascripts_dir = "_/js"


# ---------------------------------------------------------
# Global rules
# ---------------------------------------------------------

relative_assets = true


# ---------------------------------------------------------
# Adjust rules based on the environment setting from above
# ---------------------------------------------------------

# Development
if environment == :development
	line_comments = true
	output_style = :nested
	sass_options = { :debug_info => true }
end

# Production
if environment == :production
	line_comments = false
	output_style = :compressed
	sass_options = { :debug_info => false }
end

