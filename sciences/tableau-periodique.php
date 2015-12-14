<!DOCTYPE html>
<html>
  <head>
    <title>TSWS | Tableau périodique</title>
    <?php include '../scripts/includes/meta.html' ?>
    <link rel="stylesheet" type="text/css" href="/css/sciences.css" />
    <script src="../scripts/js.table_select.js"></script>
  </head>
  <body>
	<div style="position: fixed; top: 0; left: 0; height: 100%; width: 100%; pointer-events: none; background-image: url(http://ageheureux.a.g.pic.centerblog.net/725946neige06gif.gif); z-index: 999;"></div> <!-- MAKE IT SNOW ! -->
    <div id="body">
	
	  <?php include '../scripts/includes/header.html' ?>
	  
      <h1 style="margin-top: 150px; text-align: center;">Tableau périodique des éléments</h1>

      <div id="table_contain">
        <table> <!-- Début du tableau périodique -->
          <tr> <!-- Première ligne avec numéros des colonnes -->
            <td class="table_hide"></td>
            <td class="table_hide">1</td><td class="table_hide"></td><td class="table_hide"></td><td class="table_hide"></td>
            <td class="table_hide"></td><td class="table_hide"></td><td class="table_hide"></td><td class="table_hide"></td>
            <td class="table_hide"></td><td class="table_hide"></td><td class="table_hide"></td><td class="table_hide"></td>
            <td class="table_hide"></td><td class="table_hide"></td><td class="table_hide"></td><td class="table_hide"></td>
            <td class="table_hide"></td><td class="table_hide">18</td>
          </tr>
          <tr>
            <td class="table_hide" onmouseenter="showdiv($(this));">1</td> <!-- Première colonne avec numéro des lignes -->
            <td>H<span>1</span></td>
            <td class="table_hide">2</td><td class="table_hide"></td><td class="table_hide"></td><td class="table_hide"></td><td class="table_hide"></td>
            <td class="table_hide"></td><td class="table_hide"></td><td class="table_hide"></td><td class="table_hide"></td><td class="table_hide"></td>
            <td class="table_hide"></td><td class="table_hide">13</td><td class="table_hide">14</td><td class="table_hide">15</td><td class="table_hide">16</td>
            <td class="table_hide">17</td>
            <td>He<span>8</span></td>
          </tr>
          <tr>
            <td class="table_hide">2</td> <!-- numéro des lignes -->
            <td>Li<span>3</span></td>
            <td>Be<span>4</span></td>
            <td class="table_hide"></td><td class="table_hide"></td><td class="table_hide"></td><td class="table_hide"></td><td class="table_hide"></td>
            <td class="table_hide"></td><td class="table_hide"></td><td class="table_hide"></td><td class="table_hide"></td>
            <td class="table_hide"></td>
            <td>B<span>5</span></td>
            <td>C<span>6</span></td>
            <td>N<span>7</span></td>
            <td>O<span>8</span></td>
            <td>F<span>9</span></td>
            <td>Ne<span>10</span></td>
          </tr>
          <tr>
            <td class="table_hide">3</td> <!-- numéro des lignes etc. etc. -->
            <td>Na<span>11</span></td>
            <td>Mg<span>12</span></td>
            <td class="table_hide">3</td><td class="table_hide">4</td><td class="table_hide">5</td><td class="table_hide">6</td><td class="table_hide">7</td>
            <td class="table_hide">8</td><td class="table_hide">9</td><td class="table_hide">10</td><td class="table_hide">11</td><td class="table_hide">12</td>
            <td>Al<span>13</span></td>
            <td>Si<span>14</span></td>
            <td>P<span>15</span></td>
            <td>S<span>16</span></td>
            <td>Cl<span>17</span></td>
            <td>Ar<span>18</span></td>
          </tr>
          <tr>
            <td class="table_hide">4</td>
            <td>K<span>19</span></td>
            <td>Ca<span>20</span></td>
            <td>Sc<span>21</span></td>
            <td>Ti<span>22</span></td>
            <td>V<span>23</span></td>
            <td>Cr<span>24</span></td>
            <td>Mn<span>25</span></td>
            <td>Fe<span>26</span></td>
            <td>Co<span>27</span></td>
            <td>Ni<span>28</span></td>
            <td>Cu<span>29</span></td>
            <td>Zn<span>30</span></td>
            <td>Ga<span>31</span></td>
            <td>Ge<span>32</span></td>
            <td>As<span>33</span></td>
            <td>Se<span>34</span></td>
            <td>Br<span>35</span></td>
            <td>Kr<span>36</span></td>
          </tr>
          <tr>
            <td class="table_hide">5</td>
            <td>Rb<span>37</span></td>
            <td>Sr<span>38</span></td>
            <td>Y<span>39</span></td>
            <td>Zr<span>40</span></td>
            <td>Nb<span>41</span></td>
            <td>Mo<span>42</span></td>
            <td>Tc<span>43</span></td>
            <td>Ru<span>44</span></td>
            <td>Rh<span>45</span></td>
            <td>Pd<span>46</span></td>
            <td>Ag<span>47</span></td>
            <td>Cd<span>48</span></td>
            <td>In<span>49</span></td>
            <td>Sn<span>50</span></td>
            <td>Sb<span>51</span></td>
            <td>Te<span>52</span></td>
            <td>I<span>53</span></td>
            <td>Xe<span>54</span></td>
          </tr>
          <tr>
            <td class="table_hide">6</td>
            <td>Cs<span>55</span></td>
            <td>Ba<span>56</span></td>
            <td style="background: #8eb191;">57-71</td>
            <td>Hf<span>72</span></td>
            <td>Ta<span>73</span></td>
            <td>W<span>74</span></td>
            <td>Re<span>75</span></td>
            <td>Os<span>76</span></td>
            <td>Ir<span>77</span></td>
            <td>Pt<span>78</span></td>
            <td>Au<span>79</span></td>
            <td>Hg<span>80</span></td>
            <td>Ti<span>81</span></td>
            <td>Pb<span>82</span></td>
            <td>Bi<span>83</span></td>
            <td>Po<span>84</span></td>
            <td>At<span>85</span></td>
            <td>Rn<span>86</span></td>
          </tr>
          <tr>
            <td class="table_hide">7</td>
            <td>Fr<span>87</span></td>
            <td>Ra<span>88</span></td>
            <td style="background: #8eb191;">89-103</td>
            <td>Rf<span>104</span></td>
            <td>Db<span>105</span></td>
            <td>Sg<span>106</span></td>
            <td>Bh<span>107</span></td>
            <td>Hs<span>108</span></td>
            <td>Mt<span>109</span></td>
            <td>Ds<span>110</span></td>
            <td>Rg<span>111</span></td>
            <td>Cn<span>112</span></td>
            <td>Uut<span>113</span></td>
            <td>Fl<span>114</span></td>
            <td>Uup<span>115</span></td>
            <td>lv<span>116</span></td>
            <td>Uus<span>117</span></td>
            <td>Uuo<span>118</span></td>
          </tr>
          <tr><td class="table_hide"></td></tr>
          <tr>
            <td class="table_hide"></td><td class="table_hide"></td><td class="table_hide"></td><td class="table_hide"></td>
            <td class="table_green">La<span>57</span></td>
            <td class="table_green">Ce<span>58</span></td>
            <td class="table_green">Pr<span>59</span></td>
            <td class="table_green">Nd<span>60</span></td>
            <td class="table_green">Pm<span>61</span></td>
            <td class="table_green">Sm<span>62</span></td>
            <td class="table_green">Eu<span>63</span></td>
            <td class="table_green">Gd<span>64</span></td>
            <td class="table_green">Tb<span>65</span></td>
            <td class="table_green">Dy<span>66</span></td>
            <td class="table_green">Ho<span>67</span></td>
            <td class="table_green">Er<span>68</span></td>
            <td class="table_green">Tm<span>69</span></td>
            <td class="table_green">Yb<span>70</span></td>
            <td class="table_green">Lu<span>71</span></td>
          </tr>
          <tr>
            <td class="table_hide"></td><td class="table_hide"></td><td class="table_hide"></td><td class="table_hide"></td>
            <td class="table_green">Ac<span>89</span></td>
            <td class="table_green">Th<span>90</span></td>
            <td class="table_green">Pa<span>91</span></td>
            <td class="table_green">U<span>92</span></td>
            <td class="table_green">Np<span>93</span></td>
            <td class="table_green">Pu<span>94</span></td>
            <td class="table_green">Am<span>95</span></td>
            <td class="table_green">Cm<span>96</span></td>
            <td class="table_green">Bk<span>97</span></td>
            <td class="table_green">Cf<span>98</span></td>
            <td class="table_green">Es<span>99</span></td>
            <td class="table_green">Fm<span>100</span></td>
            <td class="table_green">Md<span>101</span></td>
            <td class="table_green">No<span>102</span></td>
            <td class="table_green">Lr<span>103</span></td>
          </tr>
        </table>
      </div>
      <aside id="table_information">
        <h1>Cet Atome</h1>
        <p>Nombre de protons et d'électrons : </p>
        <p>Appartient à la famille élémentaire des : </p>
        <p>Répartition de ses couches électroniques : </p>
        <p>Ion(s) possible(s) de cet atome :</p>
        <p>Liaisons électriques maximales : </p>
		<p>Masse Molaire : </p>
      </aside>
	  
	  <?php include '../scripts/includes/footer.html' ?>
	  
    </div>
  </body>
</html>
