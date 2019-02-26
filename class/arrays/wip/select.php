<?php function arrayToSelect($option, $selected = '', $optgroup = NULL)
{
    $returnStatement = '';

    if ($selected == '') {
        $returnStatement .= '<option value="" selected="selected">Select one...</option>';
    }

    if (isset($optgroup)) {
        foreach ($optgroup as $optgroupKey => $optgroupValue) {
            $returnStatement .= '<optgroup label="' . $optgroupValue . '">';

            foreach ($option[$optgroupKey] as $optionKey => $optionValue) {
                if ($optionKey == $selected) {
                    $returnStatement .= '<option selected="selected" value="' . $optionKey . '">' . $optionValue . '</option>';
                } else {
                    $returnStatement .= '<option value="' . $optionKey . '">' . $optionValue . '</option>';
                }
            }

            $returnStatement .= '</optgroup>';
        }
    } else {
        foreach ($option as $key => $value) {
            if ($key == $selected) {
                $returnStatement .= '<option selected="selected" value="' . $key . '">' . $value . '</option>';
            } else {
                $returnStatement .= '<option value="' . $key . '">' . $value . '</option>';
            }
        }
    }

    return $returnStatement;
}
$countryList = array(
    'CA'        => 'Canada',
    'US'        => 'United States');

$stateList['CA'] = array(
    'AB'        => 'Alberta',
    'BC'        => 'British Columbia',
    'AB'        => 'Alberta',
    'BC'        => 'British Columbia',
    'MB'        => 'Manitoba',
    'NB'        => 'New Brunswick',
    'NL'        => 'Newfoundland/Labrador',
    'NS'        => 'Nova Scotia',
    'NT'        => 'Northwest Territories',
    'NU'        => 'Nunavut',
    'ON'        => 'Ontario',
    'PE'        => 'Prince Edward Island',
    'QC'        => 'Quebec',
    'SK'        => 'Saskatchewan',
    'YT'        => 'Yukon');

$stateList['US'] = array(
    'AL'        => 'Alabama',
    'AK'        => 'Alaska',
    'AZ'        => 'Arizona',
    'AR'        => 'Arkansas',
    'CA'        => 'California',
    'CO'        => 'Colorado',
    'CT'        => 'Connecticut',
    'DE'        => 'Delaware',
    'DC'        => 'District of Columbia',
    'FL'        => 'Florida',
    'GA'        => 'Georgia',
    'HI'        => 'Hawaii',
    'ID'        => 'Idaho',
    'IL'        => 'Illinois',
    'IN'        => 'Indiana',
    'IA'        => 'Iowa',
    'KS'        => 'Kansas',
    'KY'        => 'Kentucky',
    'LA'        => 'Louisiana',
    'ME'        => 'Maine',
    'MD'        => 'Maryland',
    'MA'        => 'Massachusetts',
    'MI'        => 'Michigan',
    'MN'        => 'Minnesota',
    'MS'        => 'Mississippi',
    'MO'        => 'Missouri',
    'MT'        => 'Montana',
    'NE'        => 'Nebraska',
    'NV'        => 'Nevada',
    'NH'        => 'New Hampshire',
    'NJ'        => 'New Jersey',
    'NM'        => 'New Mexico',
    'NY'        => 'New York',
    'NC'        => 'North Carolina',
    'ND'        => 'North Dakota',
    'OH'        => 'Ohio',
    'OK'        => 'Oklahoma',
    'OR'        => 'Oregon',
    'PA'        => 'Pennsylvania',
    'RI'        => 'Rhode Island',
    'SC'        => 'South Carolina',
    'SD'        => 'South Dakota',
    'TN'        => 'Tennessee',
    'TX'        => 'Texas',
    'UT'        => 'Utah',
    'VT'        => 'Vermont',
    'VA'        => 'Virginia',
    'WA'        => 'Washington',
    'WV'        => 'West Virginia',
    'WI'        => 'Wisconsin',
    'WY'        => 'Wyoming');
?>
<!DOCTYPE html>
<html>
	<head> <title>I've been Everywhere MAN</title>
	</head>
	<body>
    <h1>I've been Everywhere MAN</h1> 

<?php  echo '</br> <iframe width="560" height="315" src="https://www.youtube.com/embed/ov4epAJRPMw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> </br>';?>
 
    
    <select name="state" id="state"><?php echo arrayToSelect($stateList,'',$countryList) ?></select>
<select name="country" id="country"><?php echo arrayToSelect($countryList,'US') ?></select>

</body>
</html>