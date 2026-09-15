import { __ } from "@wordpress/i18n";
import {
	useBlockProps,
	InspectorControls,
	InnerBlocks,
} from "@wordpress/block-editor";
import { PanelBody, SelectControl } from "@wordpress/components";

export default function Edit({ attributes, setAttributes }) {
	return (
		<>
			<InspectorControls>
				<PanelBody title={__("Animation Settings", "scroll-reveal")}>
					<SelectControl
						label={__("Animation", "scroll-reveal")}
						value={attributes.animation}
						options={[
							{
								label: __("Fade Up", "scroll-reveal"),
								value: "fade-up",
							},
							{
								label: __("Fade Down", "scroll-reveal"),
								value: "fade-down",
							},
							{
								label: __("Fade Left", "scroll-reveal"),
								value: "fade-left",
							},
							{
								label: __("Fade Right", "scroll-reveal"),
								value: "fade-right",
							},
							{
								label: __("Zoom in", "scroll-reveal"),
								value: "zoom-in",
							},
						]}
						onChange={(animation) => setAttributes({ animation })}
					/>
				</PanelBody>
			</InspectorControls>

			<div {...useBlockProps()} data-aos={attributes.animation}>
				<InnerBlocks />
			</div>
		</>
	);
}
