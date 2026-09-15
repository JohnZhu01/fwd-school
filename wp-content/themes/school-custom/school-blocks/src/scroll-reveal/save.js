import { useBlockProps, InnerBlocks } from "@wordpress/block-editor";

export default function save({ attributes }) {
	return (
		<div {...useBlockProps.save()} data-aos={attributes.animation}>
			<InnerBlocks.Content />
		</div>
	);
}
