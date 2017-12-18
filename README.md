# KitJpushBundle
Symfony wrapper for [jpush-api-php-client](https://github.com/jpush/jpush-api-php-client).  
The KitJpushBundle provides a simple integration for your Symfony project.

## Installation
 
### Step 1: Download the Bundle
---------------------------
 
Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:
 
	
	$ composer require kitlabs/kit-jpush-bundle

 
This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.
 
### Step 2: Enable the Bundle
---------------------------
 
Then, enable the bundle by adding it to the list of registered bundles
in the `app/AppKernel.php` file of your project:

	<?php
	// app/AppKernel.php
	 
	// ...
	class AppKernel extends Kernel
	{
	    public function registerBundles()
	    {
	        $bundles = array(
	            // ...
	 
	            new Kit\JpushBundle\KitJpushBundle(),
	        );
	 
	        // ...
	    }
	 
	    // ...
	}

### Step 3: Configuration 

	# config.yml
	kit_jpush:
	    client:
	        client_default:
	            app_key: *******
	            master_secret: ****
			client_another:
	            app_key: *******
	            master_secret: ****
	        
## Usage

	
	
