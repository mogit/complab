set multiplot
set title "Distributions' Histogram"
set xlabel "Values"
set ylabel "Frequency"
set xtics 0,5,50

set boxwidth 1
set xrange [-0.5:50.5]
set style data histograms
set style histogram rowstacked
set style fill solid
plot "s11.txt" title "s11",\
"s12.txt" title "s12",\
"s13.txt" title "s13",\
"s21.txt" title "s21",\
"s22.txt" title "s22",\
"s23.txt" title "s23",\
"s31.txt" title "s31",\
"s32.txt" title "s32",\
"s33.txt" title "s33",\
"s41.txt" title "s41",\
"s42.txt" title "s42",\
"s43.txt" title "s43"
unset style data
unset title
unset xlabel
unset ylabel

plot 'y1.txt' with lines title"y1",\
'y2.txt' with lines title "y2",\
'y3.txt' with lines title "y3"
unset multiplot
pause -1

