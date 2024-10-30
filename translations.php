<?php /** @noinspection PhpDuplicateSwitchCaseBodyInspection */
/**
 *
 * THIS FILE MUST BE LOCATED IN THE PLUGIN FOLDER
 *
 *
 * **************************************************************** *
 *                                                                  *
 *  ALL THE STRINGS 'PLUGIN' MUST BE REPLACED WITH THE TEXT DOMAIN  *
 *                                                                  *
 * ******************************************************************
 *
 */
defined( 'SOSIDEE_HSC' ) or die( 'you were not supposed to be here' );

    /** @var string $key is defined in the function SOS\WP\Translation::t_() that includes this file */
	switch( $key ) {
        /*
    case 'example':
        / * translators: [type] description  * /
        return _x( 'key', 'context', 'PLUGIN' );
    */

        //BACKEND
        case 'page.info.title':
            /* translators: [text] title of the info page */
            return _x('Hide/Show Post/Page Content', 'Backend', 'hideshow-postpage-content' );
        case 'page.info.subtitle':
            /* translators: [text] subtitle of the info page */
            return _x('You can hide or show part of the content of <strong>public</strong> posts or pages to users that are logged or not.', 'Backend', 'hideshow-postpage-content' );
        case 'page.info.par.usage':
            /* translators: [text] title of the paragraph Usage (info page) */
            return _x('Usage', 'Backend', 'hideshow-postpage-content' );
        case 'page.info.par.usage.description':
            /* translators: [text] description of the paragraph Usage (info page) */
            return _x('The content to be hidden or displayed must be included in a <em>shortcode</em> tagged as <strong>{TAG}</strong>.', 'Backend', 'hideshow-postpage-content' );
        case 'page.info.usage.example':
            /* translators: [text] usage examples (info page) */
            return _x('Examples', 'Backend', 'hideshow-postpage-content' );
        case 'page.info.usage.example.1':
            /* translators: [text] usage example 1 (info page) */
            return _x('Examples', 'Backend', 'hideshow-postpage-content' );
        case 'page.info.usage.example.1.description':
            /* translators: [text] description of the usage example 1 (info page) */
            return _x('Hide content to unlogged users', 'Backend', 'hideshow-postpage-content' );
        case 'page.info.usage.example.1.content':
            /* translators: [text] content of the usage example 1 (info page) */
            return _x('This content is hidden only to users not logged.', 'Backend', 'hideshow-postpage-content' );

        case 'page.info.usage.example.2.description':
            /* translators: [text] description of the usage example 2 (info page) */
            return _x('Hide content to logged users', 'Backend', 'hideshow-postpage-content' );
        case 'page.info.usage.example.2.content':
            /* translators: [text] content of the usage example 2 (info page) */
            return _x('This content is hidden only to logged users.', 'Backend', 'hideshow-postpage-content' );

        case 'page.info.usage.example.3.description':
            /* translators: [text] description of the usage example 3 (info page) */
            return _x('Show content only to unlogged users', 'Backend', 'hideshow-postpage-content' );
        case 'page.info.usage.example.3.content':
            /* translators: [text] content of the usage example 3 (info page) */
            return _x('This content is displayed only to users not logged.', 'Backend', 'hideshow-postpage-content' );

        case 'page.info.usage.example.4.description':
            /* translators: [text] description of the usage example 4 (info page) */
            return _x('Show content only to logged users', 'Backend', 'hideshow-postpage-content' );
        case 'page.info.usage.example.4.content':
            /* translators: [text] content of the usage example 4 (info page) */
            return _x('This content is displayed only to logged users.', 'Backend', 'hideshow-postpage-content' );

        case 'page.info.usage.example.5.description':
            /* translators: [text] description of the usage example 5 (info page) */
            return _x('Show content only to logged users with the role of subscriber', 'Backend', 'hideshow-postpage-content' );
        case 'page.info.usage.example.5.content':
            /* translators: [text] content of the usage example 5 (info page) */
            return _x("This content is displayed only to 'Subscribers'.", 'Backend', 'hideshow-postpage-content' );

        case 'page.info.usage.example.6.description':
            /* translators: [text] description of the usage example 6 (info page) */
            return _x('Show content only to a specific user', 'Backend', 'hideshow-postpage-content' );
        case 'page.info.usage.example.6.content':
            /* translators: [text] content of the usage example 6 (info page) */
            return _x("This content is displayed only to the user whose username is 'foobar'.", 'Backend', 'hideshow-postpage-content' );


        case 'elementor.widget.title':
            /* translators: [text] title of the Elementor widget */
            return _x('Hide/Show Content', 'Backend', 'hideshow-postpage-content' );
        case 'elementor.widget.mode.label':
            /* translators: [text] label of the action mode (i.e. hide/show) select-box control */
            return _x('Action', 'Backend', 'hideshow-postpage-content' );
        case 'elementor.widget.mode.select':
            /* translators: [select-box] option: default */
            return _x('- select -', 'Backend', 'hideshow-postpage-content' );
        case 'elementor.widget.mode.hide.guest':
            /* translators: [select-box] option: hide to guests */
            return _x('hide to guest users', 'Backend', 'hideshow-postpage-content' );
        case 'elementor.widget.mode.hide.logged':
            /* translators: [select-box] option: hide to logged */
            return _x('hide to logged in users', 'Backend', 'hideshow-postpage-content' );
        case 'elementor.widget.mode.show.guest':
            /* translators: [select-box] option: show to guests */
            return _x('show to guest users', 'Backend', 'hideshow-postpage-content' );
        case 'elementor.widget.mode.show.logged':
            /* translators: [select-box] option: show to logged */
            return _x('show to logged in users', 'Backend', 'hideshow-postpage-content' );
        case 'elementor.widget.mode.invalid':
            /* translators: [select-box] invalid option */
            return _x('select a valid action', 'Backend', 'hideshow-postpage-content' );
        case 'elementor.widget.content.label':
            /* translators: [text] label of the content control */
            return _x('Content', 'Backend', 'hideshow-postpage-content' );
        case 'elementor.widget.content.description':
            /* translators: [text] description of the content control */
            return _x('The content to be hidden or displayed depending on the selected action', 'Backend', 'hideshow-postpage-content' );
        case 'elementor.widget.content.placeholder':
            /* translators: [text] placeholder of the content control */
            return _x('place your content here...', 'Backend', 'hideshow-postpage-content' );
        case 'elementor.widget.selector.label':
            /* translators: [text] label of the selector control */
            return _x('Selector', 'Backend', 'hideshow-postpage-content' );
        case 'elementor.widget.selector.description':
            /* translators: [text] description of the selector control */
            return _x("Used if Action is set 'to logged in users'", 'Backend', 'hideshow-postpage-content' );
        case 'elementor.widget.selector.none':
            /* translators: [select-box] option: none (nor role nor user) */
            return _x('- none -', 'Backend', 'hideshow-postpage-content' );
        case 'elementor.widget.selector.role':
            /* translators: [select-box] option: users role */
            return _x('role', 'Backend', 'hideshow-postpage-content' );
        case 'elementor.widget.selector.user':
            /* translators: [select-box] option: user */
            return _x('user', 'Backend', 'hideshow-postpage-content' );
        case 'elementor.widget.role.label':
            /* translators: [text] label of the role control */
            return _x('Role(s)', 'Backend', 'hideshow-postpage-content' );
        case 'elementor.widget.role.description':
            /* translators: [text] description of the role control */
            return _x("Used if Selector is set to 'role'", 'Backend', 'hideshow-postpage-content' );
        case 'elementor.widget.user.label':
            /* translators: [text] label of the user control */
            return _x('User(s)', 'Backend', 'hideshow-postpage-content' );
        case 'elementor.widget.user.description':
            /* translators: [text] description of the user control */
            return _x("Used if Selector is set to 'user'", 'Backend', 'hideshow-postpage-content' );


		/* DO NOT ELIMINATE THE FOLLOWING CASES */

        case 'SOSIDEE_HSC\SOS\WP\MetaBox::callbackSave::nonce-empty':
            /* translators: [message] problem (empty nonce) while checking the metabox data */
            return _x('A security problem (empty nonce) occurred while checking a metabox data', 'Backend', 'hideshow-postpage-content');
        case 'SOSIDEE_HSC\SOS\WP\MetaBox::callbackSave::nonce-invalid':
            /* translators: [message] problem (invalid nonce) while checking the metabox data */
            return _x('A security problem (invalid nonce) occurred while checking a metabox data', 'Backend', 'hideshow-postpage-content');
        case 'SOSIDEE_HSC\SOS\WP\MetaBox::callbackSave::user-unauthorized':
            /* translators: [message] the user has insufficient rights to save the metabox data */
            return _x("You're not authorized to modify a metabox data", 'Backend', 'hideshow-postpage-content');

		case 'Translator':
			/* translators: User role for subscribers. */
			return _x( 'Translator', 'User role', 'hideshow-postpage-content' );


		//DEFAULT DOMAIN

		case 'Administrator':
			/* translators: User role for administrators. */
			return _x( 'Administrator', 'User role' );
		case 'Editor':
			/* translators: User role for editors. */
			return _x( 'Editor', 'User role' );
		case 'Author':
			/* translators: User role for authors. */
			return _x( 'Author', 'User role' );
		case 'Contributor':
			/* translators: User role for contributors. */
			return _x( 'Contributor', 'User role' );
		case 'Subscriber':
			/* translators: User role for subscribers. */
			return _x( 'Subscriber', 'User role' );

		default:
			return $key; //the key has not be handled
	}

?>