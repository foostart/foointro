<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-4013">
    <div class=" hidden-xs">
        <div class="container">
            <h3 class=" xx-thick">Specifications</h3>
            <div class="row">
                <div class="col-xs-12">
                    <div class="editor">
                        <p>
                            Liebert Trinergy Cube boasts unparalleled features including an average operational efficiency of 98.5%, maximum efficiency up to 99.5% and power density per core running up to 400 kW. Trinergy Cube is the only unit in the market which allows for hot scalability up to 3.4 MW in a single UPS and up to 27 MW in parallel.
                            Trinergy Cube intelligently adapts load power supply to
                            respond to the environment conditions of the installation
                            site. The system’s I/O Box and cores are rated to operate continuously up to 55°C and provide increased performances down to 20°C.
                            This product is approved by the ETL (Energy Technology List) for UK customers. Under the Enhanced Capital Allowance (ECA) scheme, ETL listed products can claim back 100% first year capital allowance. 
                        </p>
                    </div>
                </div>
            </div>
            <span class="dark">Specifications per model</span>
            <div class="row">
                <div class="col-xs-12">
                    <div class="table">
                        <div class="outer">
                            <div class="inner">
                                <table>
                                    <tbody>
                                        <tr class="title ">
                                            <th class="text-right ">
                                                <span>Models</span>
                                            </th>
                                            <td class="thick ">
                                                Power Rating
                                            </td>
                                            <td class="thick ">
                                                Input Voltage
                                            </td>
                                            <td class="thick ">
                                                Output Voltage
                                            </td>
                                            <td class="thic">
                                                Efficiency
                                            </td>
                                            <td class="thick">
                                                Wiring
                                            </td>
                                            <td class="thick">
                                                Height (in / mm)
                                            </td>
                                            <td class="thickt">
                                                Width (in / mm)
                                            </td>
                                            <td class="thick">
                                                Depth (in / mm)
                                            </td>
                                            <td class="thick">
                                                Weight (lbs / kgs)
                                            </td>
                                        </tr>
                                        <tr class="content ">
                                            <th class="text-right ">
                                                <a href="#">Trinergy Cube 200 kW Core </a>
                                                <span class="fa fa-caret-right"></span>
                                            </th>
                                            <td class="thick  ">200 kVA / 200 kW</td>
                                            <td class="thick  ">380 / 400 / 415 VAC</td>
                                            <td class="thick  ">380 / 400 / 415 VAC</td>
                                            <td class="thick  ">98.5%</td>
                                            <td class="thick  ">3 ph + N + PE, 3 ph + PE </td>
                                            <td class="thick  "> / 1950 mm</td>
                                            <td class="thick  "> / 500 mm</td>
                                            <td class="thick  "> / 910 mm</td>
                                            <td class="thick  "> / 465 kg</td>
                                        </tr>
                                        <tr class="content ">
                                            <th class="  text-right ">
                                                <a href="#">Trinergy Cube 400 kW Core </a>
                                                <span class="fa fa-caret-right"></span>
                                            </th>
                                            <td class="thick  ">380 / 400 / 415 VACC</td>
                                            <td class="thick  ">380 / 400 / 415 VAC</td>
                                            <td class="thick  ">98.5%</td>
                                            <td class="thick  ">3 ph + N + PE, 3 ph + PE </td>
                                            <td class="thick  "> / 1950 mm</td>
                                            <td class="thick  ">  / 675 mm</td>
                                            <td class="thick  "> / 910 mm</td>
                                            <td class="thick  ">  / 610 kg</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <span class="pull-left ">* To view a specific model product page click on the model name above.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="visible-xs">
        <div class="container">
            <h3 class="xx-thick">Specifications</h3>
            <div class="row">
                <div class="col-xs-12">
                    <div class="editor">
                        <p>
                            Liebert Trinergy Cube boasts unparalleled features including an average operational efficiency of 98.5%, maximum efficiency up to 99.5% and power density per core running up to 400 kW. Trinergy Cube is the only unit in the market which allows for hot scalability up to 3.4 MW in a single UPS and up to 27 MW in parallel.
                            Trinergy Cube intelligently adapts load power supply to
                            respond to the environment conditions of the installation
                            site. The system’s I/O Box and cores are rated to operate continuously up to 55°C and provide increased performances down to 20°C.
                            This product is approved by the ETL (Energy Technology List) for UK customers. Under the Enhanced Capital Allowance (ECA) scheme, ETL listed products can claim back 100% first year capital allowance. 
                        </p>
                    </div>
                </div>
            </div>
            <span class=" dark">Specifications per model</span>
            <select class="form-control">
                <option value="Select a Model">Select a Model</option>
                <option value="Trinergy Cube 200 kW Core">Trinergy Cube 200 kW Core</option>
                <option value="Trinergy Cube 200 kW Core">Trinergy Cube 200 kW Core</option>
                <option value="Trinergy Cube 200 kW Core">Trinergy Cube 200 kW Core</option>
                <option value="Trinergy Cube 200 kW Core">Trinergy Cube 200 kW Core</option>
            </select>
        </div>
    </div>
</div>