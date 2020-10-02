<?php
declare(strict_types=1);

// Source: http://www.tilman.de/programme/mathparser/substitutions.txt
// This list previously includes some items twice.  That was okay, but some static analyis tools will complained, so non-used ones have been removed
 const MML_TAGS = array (
  '<msqrt>'  => '\sqrt{',
  '<mi>'     => '',
  '</mi>'    => '',
  '</msqrt>' => '}',
  '<mo>'     => '',
  '</mo>'    => '',
  '<mn>'     => '',
  '</mn>'    => '',
  '<mtext>'  => '\text{',
  '</mtext>' => '}',
  '<mfenced>'   =>  '\left(',
  '</mfenced>' => '\right)',
  // Need to see these bits in action to work out how to resolve
  // Perhaps unlikely to occur in article titles, anyway
  /*'<mfrac>'   =>  '\frac{%BLOCK1%}{%BLOCK2%}',
  '<msup>'  =>  '%BLOCK1%^{%BLOCK2%}',
  '<msub>'  =>  '%BLOCK1%_{%BLOCK2%}',
  '<mroot>' =>  '\sqrt[%BLOCK2%]{%BLOCK1%}',
  '<msubsup>'   =>  '%BLOCK1%_{%BLOCK2%}^{%BLOCK3%}',
  '<munderover>'    =>  '%BLOCK1%_{%BLOCK2%}^{%BLOCK3%}',
  '<munder>'    =>  '%BLOCK1%_{%BLOCK2%}',
  '<mtable>'    =>  '\matrix{%BLOCKS%}',
  '<mtr>'   =>  '%BLOCKS%\cr',
  '<mtd>'   =>  '%BLOCK1%&',*/
  
  '&dot;'   =>  '\cdot',
  '&middot;'    =>  '\cdot',
  '&times;' =>  '\times',
  '&equals;'    =>  '\Relbar',
  '&%x220d;'    =>  '\ni',
  '&minus;' =>  '-',
  '&frasl;' =>  '/',
  '&ratio;' =>  ':',
  '&lt;'    =>  '<',
  '&gt;'    =>  '>',
  '&InvisibleTimes;'    =>  '',
  
  // Pfeile
  '&harr;'  =>  '\leftrightarrow',
  '&larr;'  =>  '\leftarrow',
  '&rarr;'  =>  '\rightarrow',
  '&hArr;'  =>  '\Leftrightarrow',
  '&lArr;'  =>  '\Leftarrow',
  '&rArr;'  =>  '\Rightarrow',
  
  // dynamische Zeichen
  '&dd;'    =>  'd',
  
  // griechisches Alphabet
  '&alpha;' =>  '\alpha',
  '&beta;'  =>  '\beta',
  '&gamma;' =>  '\gamma',
  '&delta;' =>  '\delta',
  '&epsi;'  =>  '\epsilon',
  '&eta;'   =>  '\eta',
  '&iota;'  =>  '\iota',
  '&kappa;' =>  '\kappa',
  '&lambda;'    =>  '\lambda',
  '&mu;'    =>  '\mu',
  '&mgr;'   =>  '\mu',
  '&nu;'    =>  '\nu',
  '&omicron;'   =>  'o',
  '&pi;'    =>  '\pi',
  '&theta;' =>  '\theta',
  '&rho;'   =>  '\rho',
  '&rgr;'   =>  '\rho',
  '&sigma;' =>  '\sigma',
  '&tau;'   =>  '\tau',
  '&upsilon;'   =>  '\upsilon',
  '&phiv;'  =>  '\phi',
  '&phi;'   =>  '\varphi',
  '&chi;'   =>  '\chi',
  '&piv;'   =>  '\varpi',
  '&pgr;'   =>  '\pi',
  '&ohgr;'  =>  '\omega',
  '&omega;' =>  '\omega',
  '&xi;'    =>  '\xi',
  '&psi;'   =>  '\psi',
  '&zeta;'  =>  '\zeta',
  '&Delta;' =>  '\Delta',
  '&Phi;'   =>  '\Phi',
  '&Gamma;' =>  '\Gamma',
  '&Lambda;'    =>  '\Lambda',
  '&Pi;'    =>  '\Pi',
  '&tgr;'   =>  '\tau',
  '&Theta;' =>  '\Theta',
  '&Sigma;' =>  '\Sigma',
  '&Upsilon;'   =>  '\Upsilon',
  '&sigmaf;'    =>  '\varsigma',
  '&Omega;' =>  '\Omega',
  '&Xi;'    =>  '\Xi',
  '&Psi;'   =>  '\Psi',
  '&epsiv;' =>  '\epsilon',
  '&phgr;'  =>  '\phi',
  '&ggr;'   =>  '\gamma',
  '&eegr;'  =>  '\eta',
  '&igr;'   =>  '\iota',
  '&kgr;'   =>  '\kappa',
  '&lgr;'   =>  '\lambda',
  '&ngr;'   =>  '\nu',
  '&ogr;'   =>  'o',
  '&thgr;'  =>  '\theta',
  '&sgr;'   =>  '\sigma',
  '&ugr;'   =>  '\upsilon',
  '&zgr;'   =>  '\zeta',
  '&Agr;'   =>  'A',
  '&Bgr;'   =>  'B',
  '&KHgr;'  =>  'X',
  '&Egr;'   =>  'E',
  '&PHgr;'  =>  '\Phi',
  '&Ggr;'   =>  '\Gamma',
  '&EEgr;'  =>  'H',
  '&Igr;'   =>  'I',
  '&THgr;'  =>  '\Theta',
  '&Kgr;'   =>  'K',
  '&Lgr;'   =>  '\Lambda',
  '&Mgr;'   =>  'M',
  '&Ngr;'   =>  'N',
  '&Ogr;'   =>  'O',
  '&Pgr;'   =>  '\Pi',
  '&Rgr;'   =>  'P',
  '&Sgr;'   =>  '\Sigma',
  '&Tgr;'   =>  'T',
  '&Ugr;'   =>  '\Upsilon',
  '&OHgr;'  =>  '\Omega',
  '&Zgr;'   =>  'Z',
  
  // Pfeile und andere Operatoren
  '&perp;'  =>  '\bot',
  '&prime;' =>  '\prime',
  '&infin;' =>  '\infty',
  '&clubs;' =>  '\clubsuit',
  '&diams;' =>  '\diamondsuit',
  '&hearts;'    =>  '\heartsuit',
  '&spades;'    =>  '\spadesuit',
  '&PlusMinus;' =>  '\pm',
  '&Prime;' =>  '\prime\prime',
  '&bull;'  =>  '\bullet',
  '&ne;'    =>  '\neq',
  '&equiv;' =>  '\equiv',
  '&asymp;' =>  '\approx',
  '&hellip;'    =>  '...',
  '&VerticalBar;'   =>  '\mid',
  '&crarr;' =>  '\P',
  '&alefsym;'   =>  '\aleph',
  '&image;' =>  '\Im',
  '&real;'  =>  '\Re',
  '&weierp;'    =>  '\wp',
  '&otimes;'    =>  '\otimes',
  '&oplus;' =>  '\oplus',
  '&empty;' =>  '\emtyset',
  '&cap;'   =>  '\cap',
  '&cup;'   =>  '\cup',
  '&sup;'   =>  '\supset',
  '&nsub;'  =>  '\not\subset',
  '&sub;'   =>  '\subset',
  '&ang;'   =>  '\angle',
  '&nabla;' =>  '\nabla',
  '&radic;' =>  '\surd',
  '&and;'   =>  '\wedge',
  '&or;'    =>  '\vee',
  '&angle;' =>  '\angle',
  '&ap;'    =>  '\approx',
  '&approx;'    =>  '\approx',
  '&bigoplus;'  =>  '\oplus',
  '&bigotimes;' =>  '\otimes',
  '&bot;'   =>  '\bot',
  '&bottom;'    =>  '\bot',
  '&CirclePlus;'    =>  '\oplus',
  '&CircleTimes;'   =>  '\otimes',
  '&cong;'  =>  '\cong',
  '&Congruent;' =>  '\equiv',
  '&darr;'  =>  '\downarrow',
  '&dArr;'  =>  '\Downarrow',
  '&Del;'   =>  '\nabla',
  '&DoubleDownArrow;'   =>  '\Downarrow',
  '&DoubleLeftArrow;'   =>  '\Leftarrow',
  '&DoubleLeftRightArrow;'  =>  '\Leftrightarrow',
  '&DoubleRightArrow;'  =>  '\Rightarrow',
  '&DoubleUpArrow;' =>  '\Uparrow',
  '&downarrow;' =>  '\downarrow',
  '&Downarrow;' =>  '\Downarrow',
  '&DownArrow;' =>  '\Downarrow',
  '&Element;'   =>  '\in',
  '&emptyv;'    =>  '\oslash',
  '&exist;' =>  '\exists',
  '&Exist;' =>  '\exists',
  '&forall;'    =>  '\forall',
  '&ForAll;'    =>  '\forall',
  '&ge;'    =>  '\geq',
  '&geq;'   =>  '\geq',
  '&GreaterEqual;'  =>  '\geq',
  '&iff;'   =>  '\Leftrightarrow',
  '&Implies;'   =>  '\Rightarrow',
  '&in;'    =>  '\in',
  '&int;'   =>  '\int',
  '&Integral;'  =>  '\int',
  '&isin;'  =>  '\in',
  '&isinv;' =>  '\in',
  '&diam;'  =>  '\diamond',
  '&diamond;'   =>  '\diamond',
  '&lang;'  =>  '\left\langle',
  '&langle;'    =>  '\left\langle',
  '&le;'    =>  '\leq',
  '&LeftAngleBracket;'  =>  '\left\langle',
  '&Leftarrow;' =>  '\Leftarrow',
  '&LeftArrow;' =>  '\leftarrow',
  '&leftrightarrow;'    =>  '\leftrightarrow',
  '&Leftrightarrow;'    =>  '\Leftrightarrow',
  '&LeftRightArrow;'    =>  '\leftrightarrow',
  '&leq;'   =>  '\leq',
  '&lowast;'    =>  '\ast',
  '&NotElement;'    =>  '\notin',
  '&NotEqual;'  =>  '\notin',
  '&notin;' =>  '\notin',
  '&part;'  =>  '\partial',
  '&partialD;'  =>  '\partial',
  '&prod;'  =>  '\Pi',
  '&Product;'   =>  '\Pi',
  '&rang;'  =>  '\right\rangle',
  '&rangle;'    =>  '\right\rangle',
  '&RightAngleBracket;' =>  '\right\rangle',
  '&rightarrow;'    =>  '\rightarrow',
  '&Rightarrow;'    =>  '\Rightarrow',
  '&RightArrow;'    =>  '\rightarrow',
  '&sdot;'  =>  '\cdot',
  '&sim;'   =>  '\sim',
  '&prop;'  =>  '\propto',
  '&Proportional;'  =>  '\propto',
  '&propto;'    =>  '\propto',
  '&sube;'  =>  '\subseteq',
  '&subE;'  =>  '\subseteq',
  '&subset;'    =>  '\subset',
  '&subseteq;'  =>  '\subseteq',
  '&subseteqq;' =>  '\subseteq',
  '&SubsetEqual;'   =>  '\subseteq',
  '&sum;'   =>  '\Sigma',
  '&Sum;'   =>  '\Sigma',
  '&supe;'  =>  '\supseteq',
  '&supE;'  =>  '\supseteq',
  '&Superset;'  =>  '\supset',
  '&SupersetEqual;' =>  '\supseteq',
  '&supset;'    =>  '\supset',
  '&supseteq;'  =>  '\supseteq',
  '&supseteqq;' =>  '\supseteq',
  '&Tilde;' =>  '\sim',
  '&TildeFullEqual;'    =>  '\cong',
  '&TildeTilde;'    =>  '\approx',
  '&uarr;'  =>  '\uparrow',
  '&uArr;'  =>  '\Uparrow',
  '&uparrow;'   =>  '\uparrow',
  '&Uparrow;'   =>  '\Uparrow',
  '&UpArrow;'   =>  '\uparrow',
  '&UpTee;' =>  '\bot',
  '&varnothing;'    =>  '\oslash',
  '&varpropto;' =>  '\propto',
  '&vee;'   =>  '\vee',
  '&vprop;' =>  '\propto',
  '&wedge;' =>  '\wedge',
  '&xoplus;'    =>  '\oplus',
  '&xotime;'    =>  '\otimes',
  '&Space;' =>  '',
  '&colon;' =>  ':',
  '&ApplyFunction;' =>  '',
  '&squ;'   =>  '',

  );

