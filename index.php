<?PHP
require_once('../config.php');
require_once($CFG->libdir.'/weblib.php');
//admin_externalpage_setup('major');
print_header_simple($title='Major', $heading='heading', $navigation='navigation', $focus='', $meta='', $cache=true, $button='&nbsp;', $menu='', $usexml=false, $bodytags='', $return=false);

?>
        <form class="getparams" action="bulkenrollMgr.php" method="get">
            Residence: <select name="residence">
                <option value="AMANDA">Amanda</option>
                <option value="APARTMENTS">Apartments</option>
                <option value="BRACKEN">Bracken</option>
                <option value="BURDICK">Burdick</option>
                <option value="CELESTIA">Celestia</option>
                <option value="CENTRAL">Central</option>
                <option value="CHURCH">Church</option>
                <option value="CLAYPOOL">Claypool</option>
                <option value="DARLENE">Darlene</option>
                <option value="DAWN">Dawn</option>
                <option value="DAY PROGRAM">Day Program</option>
                <option value="EVERGREEN">Evergreen</option>
                <option value="FAIRWAY">Fairway</option>
                <option value="GLEN HILLS">Glen Hills</option>
                <option value="GRAND">Grand</option>
                <option value="GREENWICH">Greenwich</option>
                <option value="HAVERHILL">Haverhill</option>
                <option value="HELEN">Helen</option>
                <option value="IMERA">Imera</option>
                <option value="KNOLLWOOD">Knollwood</option>
                <option value="LANCELOTTA">Lancelotta</option>
                <option value="LILLIAN">Lillian</option>
                <option value="MARIE">Marie</option>
                <option value="NATICK">Natick</option>
                <option value="OAKLAND">Oakland</option>
                <option value="OFFICE">Office</option>
                <option value="REDDINGTON">Reddington</option>
                <option value="SHERWOOD">Sherwood</option>
                <option value="TARTAGLIA">Tartaglia</option>
                <option value="THISTLE">Thistle</option>
                <option value="WHITING">Whiting</option>
            </select><br /><br />
            Course Category: <select name="courseCategory">
                <option value="prior">Prior to training</option>
                <option value="ten">10 day requirements</option>
                <option value="thirty">1 month requirements</option>
                <option value="sixty">2 months requirements</option>
                <option value="ninety">3 months requirements</option>
                <option value="onetwenty">4 months requirements</option>
                <option value="annual">Annual requirements</option>
                <option value="biannual">Biannual requirements</option>
            </select><br /><br />
            <input type="submit" />
        </form>

<?PHP

print_footer($course=NULL, $usercourse=NULL, $return=false);

?>
