import { useBlockProps } from '@wordpress/block-editor';

export default function save() {
	return (
		<p { ...useBlockProps.save() }>
			{ 'Blocks Woo Game Shop – hello from the saved content!' }
		</p>
	);
}
