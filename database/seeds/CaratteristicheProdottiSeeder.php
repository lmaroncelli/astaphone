<?php

use Illuminate\Database\Seeder;

class CaratteristicheProdottiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$prodotto_ha_caratteristica = array(
    		array( // row #0
    			'prodotto_id' => 2,
    			'caratteristica_id' => 4,
    		),
    		array( // row #1
    			'prodotto_id' => 2,
    			'caratteristica_id' => 1,
    		),
    		array( // row #2
    			'prodotto_id' => 2,
    			'caratteristica_id' => 3,
    		),
    		array( // row #3
    			'prodotto_id' => 1,
    			'caratteristica_id' => 7,
    		),
    		array( // row #4
    			'prodotto_id' => 1,
    			'caratteristica_id' => 4,
    		),
    		array( // row #5
    			'prodotto_id' => 1,
    			'caratteristica_id' => 1,
    		),
    		array( // row #6
    			'prodotto_id' => 3,
    			'caratteristica_id' => 7,
    		),
    		array( // row #7
    			'prodotto_id' => 3,
    			'caratteristica_id' => 4,
    		),
    		array( // row #8
    			'prodotto_id' => 3,
    			'caratteristica_id' => 1,
    		),
    		array( // row #9
    			'prodotto_id' => 3,
    			'caratteristica_id' => 3,
    		),
    		array( // row #10
    			'prodotto_id' => 3,
    			'caratteristica_id' => 6,
    		),
    		array( // row #11
    			'prodotto_id' => 3,
    			'caratteristica_id' => 2,
    		),
    		array( // row #12
    			'prodotto_id' => 3,
    			'caratteristica_id' => 5,
    		),
    		array( // row #13
    			'prodotto_id' => 3,
    			'caratteristica_id' => 8,
    		),
    		array( // row #14
    			'prodotto_id' => 4,
    			'caratteristica_id' => 3,
    		),
    		array( // row #15
    			'prodotto_id' => 4,
    			'caratteristica_id' => 6,
    		),
    		array( // row #16
    			'prodotto_id' => 5,
    			'caratteristica_id' => 7,
    		),
    		array( // row #17
    			'prodotto_id' => 5,
    			'caratteristica_id' => 1,
    		),
    		array( // row #18
    			'prodotto_id' => 5,
    			'caratteristica_id' => 3,
    		),
    		array( // row #19
    			'prodotto_id' => 5,
    			'caratteristica_id' => 8,
    		),
    		array( // row #20
    			'prodotto_id' => 6,
    			'caratteristica_id' => 7,
    		),
    		array( // row #21
    			'prodotto_id' => 6,
    			'caratteristica_id' => 4,
    		),
    		array( // row #22
    			'prodotto_id' => 6,
    			'caratteristica_id' => 3,
    		),
    		array( // row #23
    			'prodotto_id' => 6,
    			'caratteristica_id' => 6,
    		),
    		array( // row #24
    			'prodotto_id' => 6,
    			'caratteristica_id' => 8,
    		),
    		array( // row #25
    			'prodotto_id' => 7,
    			'caratteristica_id' => 1,
    		),
    		array( // row #26
    			'prodotto_id' => 7,
    			'caratteristica_id' => 6,
    		),
    		array( // row #27
    			'prodotto_id' => 7,
    			'caratteristica_id' => 5,
    		),
    		array( // row #28
    			'prodotto_id' => 8,
    			'caratteristica_id' => 7,
    		),
    		array( // row #29
    			'prodotto_id' => 8,
    			'caratteristica_id' => 4,
    		),
    		array( // row #30
    			'prodotto_id' => 8,
    			'caratteristica_id' => 1,
    		),
    		array( // row #31
    			'prodotto_id' => 8,
    			'caratteristica_id' => 3,
    		),
    		array( // row #32
    			'prodotto_id' => 8,
    			'caratteristica_id' => 6,
    		),
    		array( // row #33
    			'prodotto_id' => 8,
    			'caratteristica_id' => 2,
    		),
    		array( // row #34
    			'prodotto_id' => 8,
    			'caratteristica_id' => 5,
    		),
    		array( // row #35
    			'prodotto_id' => 8,
    			'caratteristica_id' => 8,
    		),
    		array( // row #36
    			'prodotto_id' => 18,
    			'caratteristica_id' => 6,
    		),
    		array( // row #37
    			'prodotto_id' => 18,
    			'caratteristica_id' => 2,
    		),
    		array( // row #38
    			'prodotto_id' => 22,
    			'caratteristica_id' => 6,
    		),
    		array( // row #39
    			'prodotto_id' => 22,
    			'caratteristica_id' => 2,
    		),
    		array( // row #40
    			'prodotto_id' => 256,
    			'caratteristica_id' => 2,
    		),
    		array( // row #41
    			'prodotto_id' => 256,
    			'caratteristica_id' => 6,
    		),
    		array( // row #42
    			'prodotto_id' => 256,
    			'caratteristica_id' => 3,
    		),
    		array( // row #43
    			'prodotto_id' => 256,
    			'caratteristica_id' => 1,
    		),
    		array( // row #44
    			'prodotto_id' => 59,
    			'caratteristica_id' => 4,
    		),
    		array( // row #45
    			'prodotto_id' => 59,
    			'caratteristica_id' => 6,
    		),
    		array( // row #46
    			'prodotto_id' => 59,
    			'caratteristica_id' => 2,
    		),
    		array( // row #47
    			'prodotto_id' => 63,
    			'caratteristica_id' => 4,
    		),
    		array( // row #48
    			'prodotto_id' => 63,
    			'caratteristica_id' => 6,
    		),
    		array( // row #49
    			'prodotto_id' => 63,
    			'caratteristica_id' => 2,
    		),
    		array( // row #50
    			'prodotto_id' => 67,
    			'caratteristica_id' => 4,
    		),
    		array( // row #51
    			'prodotto_id' => 67,
    			'caratteristica_id' => 6,
    		),
    		array( // row #52
    			'prodotto_id' => 67,
    			'caratteristica_id' => 2,
    		),
    		array( // row #53
    			'prodotto_id' => 20,
    			'caratteristica_id' => 4,
    		),
    		array( // row #54
    			'prodotto_id' => 158,
    			'caratteristica_id' => 7,
    		),
    		array( // row #55
    			'prodotto_id' => 20,
    			'caratteristica_id' => 6,
    		),
    		array( // row #56
    			'prodotto_id' => 21,
    			'caratteristica_id' => 4,
    		),
    		array( // row #57
    			'prodotto_id' => 157,
    			'caratteristica_id' => 8,
    		),
    		array( // row #58
    			'prodotto_id' => 21,
    			'caratteristica_id' => 6,
    		),
    		array( // row #59
    			'prodotto_id' => 23,
    			'caratteristica_id' => 4,
    		),
    		array( // row #60
    			'prodotto_id' => 157,
    			'caratteristica_id' => 7,
    		),
    		array( // row #61
    			'prodotto_id' => 156,
    			'caratteristica_id' => 8,
    		),
    		array( // row #62
    			'prodotto_id' => 25,
    			'caratteristica_id' => 4,
    		),
    		array( // row #63
    			'prodotto_id' => 25,
    			'caratteristica_id' => 1,
    		),
    		array( // row #64
    			'prodotto_id' => 25,
    			'caratteristica_id' => 3,
    		),
    		array( // row #65
    			'prodotto_id' => 25,
    			'caratteristica_id' => 6,
    		),
    		array( // row #66
    			'prodotto_id' => 156,
    			'caratteristica_id' => 7,
    		),
    		array( // row #67
    			'prodotto_id' => 26,
    			'caratteristica_id' => 6,
    		),
    		array( // row #68
    			'prodotto_id' => 27,
    			'caratteristica_id' => 4,
    		),
    		array( // row #69
    			'prodotto_id' => 155,
    			'caratteristica_id' => 2,
    		),
    		array( // row #70
    			'prodotto_id' => 27,
    			'caratteristica_id' => 2,
    		),
    		array( // row #71
    			'prodotto_id' => 29,
    			'caratteristica_id' => 4,
    		),
    		array( // row #72
    			'prodotto_id' => 29,
    			'caratteristica_id' => 1,
    		),
    		array( // row #73
    			'prodotto_id' => 30,
    			'caratteristica_id' => 4,
    		),
    		array( // row #74
    			'prodotto_id' => 30,
    			'caratteristica_id' => 1,
    		),
    		array( // row #75
    			'prodotto_id' => 31,
    			'caratteristica_id' => 4,
    		),
    		array( // row #76
    			'prodotto_id' => 31,
    			'caratteristica_id' => 1,
    		),
    		array( // row #77
    			'prodotto_id' => 32,
    			'caratteristica_id' => 4,
    		),
    		array( // row #78
    			'prodotto_id' => 32,
    			'caratteristica_id' => 1,
    		),
    		array( // row #79
    			'prodotto_id' => 32,
    			'caratteristica_id' => 6,
    		),
    		array( // row #80
    			'prodotto_id' => 33,
    			'caratteristica_id' => 1,
    		),
    		array( // row #81
    			'prodotto_id' => 33,
    			'caratteristica_id' => 6,
    		),
    		array( // row #82
    			'prodotto_id' => 34,
    			'caratteristica_id' => 1,
    		),
    		array( // row #83
    			'prodotto_id' => 34,
    			'caratteristica_id' => 6,
    		),
    		array( // row #84
    			'prodotto_id' => 36,
    			'caratteristica_id' => 4,
    		),
    		array( // row #85
    			'prodotto_id' => 36,
    			'caratteristica_id' => 1,
    		),
    		array( // row #86
    			'prodotto_id' => 37,
    			'caratteristica_id' => 2,
    		),
    		array( // row #87
    			'prodotto_id' => 170,
    			'caratteristica_id' => 1,
    		),
    		array( // row #88
    			'prodotto_id' => 252,
    			'caratteristica_id' => 4,
    		),
    		array( // row #89
    			'prodotto_id' => 251,
    			'caratteristica_id' => 6,
    		),
    		array( // row #90
    			'prodotto_id' => 37,
    			'caratteristica_id' => 1,
    		),
    		array( // row #91
    			'prodotto_id' => 170,
    			'caratteristica_id' => 7,
    		),
    		array( // row #92
    			'prodotto_id' => 41,
    			'caratteristica_id' => 4,
    		),
    		array( // row #93
    			'prodotto_id' => 41,
    			'caratteristica_id' => 3,
    		),
    		array( // row #94
    			'prodotto_id' => 41,
    			'caratteristica_id' => 6,
    		),
    		array( // row #95
    			'prodotto_id' => 43,
    			'caratteristica_id' => 4,
    		),
    		array( // row #96
    			'prodotto_id' => 154,
    			'caratteristica_id' => 2,
    		),
    		array( // row #97
    			'prodotto_id' => 43,
    			'caratteristica_id' => 3,
    		),
    		array( // row #98
    			'prodotto_id' => 43,
    			'caratteristica_id' => 6,
    		),
    		array( // row #99
    			'prodotto_id' => 251,
    			'caratteristica_id' => 3,
    		),
    		array( // row #100
    			'prodotto_id' => 154,
    			'caratteristica_id' => 7,
    		),
    		array( // row #101
    			'prodotto_id' => 251,
    			'caratteristica_id' => 4,
    		),
    		array( // row #102
    			'prodotto_id' => 253,
    			'caratteristica_id' => 6,
    		),
    		array( // row #103
    			'prodotto_id' => 45,
    			'caratteristica_id' => 4,
    		),
    		array( // row #104
    			'prodotto_id' => 159,
    			'caratteristica_id' => 8,
    		),
    		array( // row #105
    			'prodotto_id' => 45,
    			'caratteristica_id' => 6,
    		),
    		array( // row #106
    			'prodotto_id' => 45,
    			'caratteristica_id' => 5,
    		),
    		array( // row #107
    			'prodotto_id' => 46,
    			'caratteristica_id' => 1,
    		),
    		array( // row #108
    			'prodotto_id' => 46,
    			'caratteristica_id' => 2,
    		),
    		array( // row #109
    			'prodotto_id' => 138,
    			'caratteristica_id' => 3,
    		),
    		array( // row #110
    			'prodotto_id' => 48,
    			'caratteristica_id' => 1,
    		),
    		array( // row #111
    			'prodotto_id' => 259,
    			'caratteristica_id' => 8,
    		),
    		array( // row #112
    			'prodotto_id' => 49,
    			'caratteristica_id' => 1,
    		),
    		array( // row #113
    			'prodotto_id' => 256,
    			'caratteristica_id' => 4,
    		),
    		array( // row #114
    			'prodotto_id' => 254,
    			'caratteristica_id' => 8,
    		),
    		array( // row #115
    			'prodotto_id' => 252,
    			'caratteristica_id' => 6,
    		),
    		array( // row #116
    			'prodotto_id' => 154,
    			'caratteristica_id' => 5,
    		),
    		array( // row #117
    			'prodotto_id' => 252,
    			'caratteristica_id' => 3,
    		),
    		array( // row #118
    			'prodotto_id' => 52,
    			'caratteristica_id' => 4,
    		),
    		array( // row #119
    			'prodotto_id' => 53,
    			'caratteristica_id' => 4,
    		),
    		array( // row #120
    			'prodotto_id' => 54,
    			'caratteristica_id' => 1,
    		),
    		array( // row #121
    			'prodotto_id' => 55,
    			'caratteristica_id' => 1,
    		),
    		array( // row #122
    			'prodotto_id' => 55,
    			'caratteristica_id' => 2,
    		),
    		array( // row #123
    			'prodotto_id' => 56,
    			'caratteristica_id' => 1,
    		),
    		array( // row #124
    			'prodotto_id' => 56,
    			'caratteristica_id' => 2,
    		),
    		array( // row #125
    			'prodotto_id' => 58,
    			'caratteristica_id' => 4,
    		),
    		array( // row #126
    			'prodotto_id' => 58,
    			'caratteristica_id' => 1,
    		),
    		array( // row #127
    			'prodotto_id' => 58,
    			'caratteristica_id' => 6,
    		),
    		array( // row #128
    			'prodotto_id' => 58,
    			'caratteristica_id' => 5,
    		),
    		array( // row #129
    			'prodotto_id' => 60,
    			'caratteristica_id' => 4,
    		),
    		array( // row #130
    			'prodotto_id' => 60,
    			'caratteristica_id' => 1,
    		),
    		array( // row #131
    			'prodotto_id' => 60,
    			'caratteristica_id' => 6,
    		),
    		array( // row #132
    			'prodotto_id' => 60,
    			'caratteristica_id' => 5,
    		),
    		array( // row #133
    			'prodotto_id' => 61,
    			'caratteristica_id' => 4,
    		),
    		array( // row #134
    			'prodotto_id' => 61,
    			'caratteristica_id' => 1,
    		),
    		array( // row #135
    			'prodotto_id' => 61,
    			'caratteristica_id' => 6,
    		),
    		array( // row #136
    			'prodotto_id' => 61,
    			'caratteristica_id' => 5,
    		),
    		array( // row #137
    			'prodotto_id' => 62,
    			'caratteristica_id' => 4,
    		),
    		array( // row #138
    			'prodotto_id' => 62,
    			'caratteristica_id' => 1,
    		),
    		array( // row #139
    			'prodotto_id' => 62,
    			'caratteristica_id' => 6,
    		),
    		array( // row #140
    			'prodotto_id' => 62,
    			'caratteristica_id' => 5,
    		),
    		array( // row #141
    			'prodotto_id' => 64,
    			'caratteristica_id' => 4,
    		),
    		array( // row #142
    			'prodotto_id' => 64,
    			'caratteristica_id' => 1,
    		),
    		array( // row #143
    			'prodotto_id' => 64,
    			'caratteristica_id' => 6,
    		),
    		array( // row #144
    			'prodotto_id' => 64,
    			'caratteristica_id' => 5,
    		),
    		array( // row #145
    			'prodotto_id' => 65,
    			'caratteristica_id' => 4,
    		),
    		array( // row #146
    			'prodotto_id' => 65,
    			'caratteristica_id' => 1,
    		),
    		array( // row #147
    			'prodotto_id' => 65,
    			'caratteristica_id' => 6,
    		),
    		array( // row #148
    			'prodotto_id' => 65,
    			'caratteristica_id' => 5,
    		),
    		array( // row #149
    			'prodotto_id' => 66,
    			'caratteristica_id' => 4,
    		),
    		array( // row #150
    			'prodotto_id' => 66,
    			'caratteristica_id' => 1,
    		),
    		array( // row #151
    			'prodotto_id' => 66,
    			'caratteristica_id' => 6,
    		),
    		array( // row #152
    			'prodotto_id' => 66,
    			'caratteristica_id' => 5,
    		),
    		array( // row #153
    			'prodotto_id' => 70,
    			'caratteristica_id' => 1,
    		),
    		array( // row #154
    			'prodotto_id' => 68,
    			'caratteristica_id' => 1,
    		),
    		array( // row #155
    			'prodotto_id' => 68,
    			'caratteristica_id' => 6,
    		),
    		array( // row #156
    			'prodotto_id' => 68,
    			'caratteristica_id' => 5,
    		),
    		array( // row #157
    			'prodotto_id' => 69,
    			'caratteristica_id' => 1,
    		),
    		array( // row #158
    			'prodotto_id' => 69,
    			'caratteristica_id' => 6,
    		),
    		array( // row #159
    			'prodotto_id' => 69,
    			'caratteristica_id' => 5,
    		),
    		array( // row #160
    			'prodotto_id' => 70,
    			'caratteristica_id' => 6,
    		),
    		array( // row #161
    			'prodotto_id' => 70,
    			'caratteristica_id' => 5,
    		),
    		array( // row #162
    			'prodotto_id' => 71,
    			'caratteristica_id' => 1,
    		),
    		array( // row #163
    			'prodotto_id' => 71,
    			'caratteristica_id' => 6,
    		),
    		array( // row #164
    			'prodotto_id' => 71,
    			'caratteristica_id' => 5,
    		),
    		array( // row #165
    			'prodotto_id' => 72,
    			'caratteristica_id' => 7,
    		),
    		array( // row #166
    			'prodotto_id' => 72,
    			'caratteristica_id' => 4,
    		),
    		array( // row #167
    			'prodotto_id' => 159,
    			'caratteristica_id' => 7,
    		),
    		array( // row #168
    			'prodotto_id' => 141,
    			'caratteristica_id' => 4,
    		),
    		array( // row #169
    			'prodotto_id' => 73,
    			'caratteristica_id' => 7,
    		),
    		array( // row #170
    			'prodotto_id' => 73,
    			'caratteristica_id' => 4,
    		),
    		array( // row #171
    			'prodotto_id' => 72,
    			'caratteristica_id' => 6,
    		),
    		array( // row #172
    			'prodotto_id' => 73,
    			'caratteristica_id' => 6,
    		),
    		array( // row #173
    			'prodotto_id' => 74,
    			'caratteristica_id' => 7,
    		),
    		array( // row #174
    			'prodotto_id' => 74,
    			'caratteristica_id' => 4,
    		),
    		array( // row #175
    			'prodotto_id' => 158,
    			'caratteristica_id' => 8,
    		),
    		array( // row #176
    			'prodotto_id' => 84,
    			'caratteristica_id' => 3,
    		),
    		array( // row #177
    			'prodotto_id' => 75,
    			'caratteristica_id' => 4,
    		),
    		array( // row #178
    			'prodotto_id' => 36,
    			'caratteristica_id' => 3,
    		),
    		array( // row #179
    			'prodotto_id' => 75,
    			'caratteristica_id' => 6,
    		),
    		array( // row #180
    			'prodotto_id' => 76,
    			'caratteristica_id' => 7,
    		),
    		array( // row #181
    			'prodotto_id' => 76,
    			'caratteristica_id' => 4,
    		),
    		array( // row #182
    			'prodotto_id' => 76,
    			'caratteristica_id' => 1,
    		),
    		array( // row #183
    			'prodotto_id' => 76,
    			'caratteristica_id' => 3,
    		),
    		array( // row #184
    			'prodotto_id' => 76,
    			'caratteristica_id' => 6,
    		),
    		array( // row #185
    			'prodotto_id' => 77,
    			'caratteristica_id' => 7,
    		),
    		array( // row #186
    			'prodotto_id' => 77,
    			'caratteristica_id' => 4,
    		),
    		array( // row #187
    			'prodotto_id' => 77,
    			'caratteristica_id' => 1,
    		),
    		array( // row #188
    			'prodotto_id' => 78,
    			'caratteristica_id' => 7,
    		),
    		array( // row #189
    			'prodotto_id' => 78,
    			'caratteristica_id' => 4,
    		),
    		array( // row #190
    			'prodotto_id' => 78,
    			'caratteristica_id' => 1,
    		),
    		array( // row #191
    			'prodotto_id' => 79,
    			'caratteristica_id' => 7,
    		),
    		array( // row #192
    			'prodotto_id' => 79,
    			'caratteristica_id' => 4,
    		),
    		array( // row #193
    			'prodotto_id' => 79,
    			'caratteristica_id' => 1,
    		),
    		array( // row #194
    			'prodotto_id' => 80,
    			'caratteristica_id' => 7,
    		),
    		array( // row #195
    			'prodotto_id' => 80,
    			'caratteristica_id' => 4,
    		),
    		array( // row #196
    			'prodotto_id' => 80,
    			'caratteristica_id' => 6,
    		),
    		array( // row #197
    			'prodotto_id' => 80,
    			'caratteristica_id' => 2,
    		),
    		array( // row #198
    			'prodotto_id' => 80,
    			'caratteristica_id' => 5,
    		),
    		array( // row #199
    			'prodotto_id' => 81,
    			'caratteristica_id' => 7,
    		),
    		array( // row #200
    			'prodotto_id' => 81,
    			'caratteristica_id' => 4,
    		),
    		array( // row #201
    			'prodotto_id' => 81,
    			'caratteristica_id' => 1,
    		),
    		array( // row #202
    			'prodotto_id' => 81,
    			'caratteristica_id' => 6,
    		),
    		array( // row #203
    			'prodotto_id' => 82,
    			'caratteristica_id' => 7,
    		),
    		array( // row #204
    			'prodotto_id' => 82,
    			'caratteristica_id' => 1,
    		),
    		array( // row #205
    			'prodotto_id' => 82,
    			'caratteristica_id' => 6,
    		),
    		array( // row #206
    			'prodotto_id' => 83,
    			'caratteristica_id' => 7,
    		),
    		array( // row #207
    			'prodotto_id' => 83,
    			'caratteristica_id' => 1,
    		),
    		array( // row #208
    			'prodotto_id' => 83,
    			'caratteristica_id' => 6,
    		),
    		array( // row #209
    			'prodotto_id' => 84,
    			'caratteristica_id' => 7,
    		),
    		array( // row #210
    			'prodotto_id' => 84,
    			'caratteristica_id' => 4,
    		),
    		array( // row #211
    			'prodotto_id' => 84,
    			'caratteristica_id' => 1,
    		),
    		array( // row #212
    			'prodotto_id' => 85,
    			'caratteristica_id' => 7,
    		),
    		array( // row #213
    			'prodotto_id' => 85,
    			'caratteristica_id' => 4,
    		),
    		array( // row #214
    			'prodotto_id' => 85,
    			'caratteristica_id' => 6,
    		),
    		array( // row #215
    			'prodotto_id' => 85,
    			'caratteristica_id' => 2,
    		),
    		array( // row #216
    			'prodotto_id' => 85,
    			'caratteristica_id' => 5,
    		),
    		array( // row #217
    			'prodotto_id' => 86,
    			'caratteristica_id' => 7,
    		),
    		array( // row #218
    			'prodotto_id' => 86,
    			'caratteristica_id' => 4,
    		),
    		array( // row #219
    			'prodotto_id' => 86,
    			'caratteristica_id' => 6,
    		),
    		array( // row #220
    			'prodotto_id' => 86,
    			'caratteristica_id' => 2,
    		),
    		array( // row #221
    			'prodotto_id' => 86,
    			'caratteristica_id' => 5,
    		),
    		array( // row #222
    			'prodotto_id' => 87,
    			'caratteristica_id' => 7,
    		),
    		array( // row #223
    			'prodotto_id' => 87,
    			'caratteristica_id' => 4,
    		),
    		array( // row #224
    			'prodotto_id' => 87,
    			'caratteristica_id' => 6,
    		),
    		array( // row #225
    			'prodotto_id' => 88,
    			'caratteristica_id' => 7,
    		),
    		array( // row #226
    			'prodotto_id' => 88,
    			'caratteristica_id' => 4,
    		),
    		array( // row #227
    			'prodotto_id' => 88,
    			'caratteristica_id' => 1,
    		),
    		array( // row #228
    			'prodotto_id' => 88,
    			'caratteristica_id' => 6,
    		),
    		array( // row #229
    			'prodotto_id' => 155,
    			'caratteristica_id' => 7,
    		),
    		array( // row #230
    			'prodotto_id' => 47,
    			'caratteristica_id' => 6,
    		),
    		array( // row #231
    			'prodotto_id' => 89,
    			'caratteristica_id' => 4,
    		),
    		array( // row #232
    			'prodotto_id' => 89,
    			'caratteristica_id' => 2,
    		),
    		array( // row #233
    			'prodotto_id' => 89,
    			'caratteristica_id' => 8,
    		),
    		array( // row #234
    			'prodotto_id' => 90,
    			'caratteristica_id' => 4,
    		),
    		array( // row #235
    			'prodotto_id' => 90,
    			'caratteristica_id' => 2,
    		),
    		array( // row #236
    			'prodotto_id' => 90,
    			'caratteristica_id' => 8,
    		),
    		array( // row #237
    			'prodotto_id' => 154,
    			'caratteristica_id' => 8,
    		),
    		array( // row #238
    			'prodotto_id' => 91,
    			'caratteristica_id' => 4,
    		),
    		array( // row #239
    			'prodotto_id' => 91,
    			'caratteristica_id' => 2,
    		),
    		array( // row #240
    			'prodotto_id' => 91,
    			'caratteristica_id' => 8,
    		),
    		array( // row #241
    			'prodotto_id' => 92,
    			'caratteristica_id' => 4,
    		),
    		array( // row #242
    			'prodotto_id' => 204,
    			'caratteristica_id' => 4,
    		),
    		array( // row #243
    			'prodotto_id' => 92,
    			'caratteristica_id' => 2,
    		),
    		array( // row #244
    			'prodotto_id' => 92,
    			'caratteristica_id' => 8,
    		),
    		array( // row #245
    			'prodotto_id' => 93,
    			'caratteristica_id' => 4,
    		),
    		array( // row #246
    			'prodotto_id' => 93,
    			'caratteristica_id' => 6,
    		),
    		array( // row #247
    			'prodotto_id' => 93,
    			'caratteristica_id' => 2,
    		),
    		array( // row #248
    			'prodotto_id' => 93,
    			'caratteristica_id' => 8,
    		),
    		array( // row #249
    			'prodotto_id' => 94,
    			'caratteristica_id' => 4,
    		),
    		array( // row #250
    			'prodotto_id' => 94,
    			'caratteristica_id' => 2,
    		),
    		array( // row #251
    			'prodotto_id' => 94,
    			'caratteristica_id' => 8,
    		),
    		array( // row #252
    			'prodotto_id' => 95,
    			'caratteristica_id' => 4,
    		),
    		array( // row #253
    			'prodotto_id' => 95,
    			'caratteristica_id' => 6,
    		),
    		array( // row #254
    			'prodotto_id' => 95,
    			'caratteristica_id' => 8,
    		),
    		array( // row #255
    			'prodotto_id' => 96,
    			'caratteristica_id' => 4,
    		),
    		array( // row #256
    			'prodotto_id' => 96,
    			'caratteristica_id' => 1,
    		),
    		array( // row #257
    			'prodotto_id' => 96,
    			'caratteristica_id' => 3,
    		),
    		array( // row #258
    			'prodotto_id' => 96,
    			'caratteristica_id' => 6,
    		),
    		array( // row #259
    			'prodotto_id' => 96,
    			'caratteristica_id' => 2,
    		),
    		array( // row #260
    			'prodotto_id' => 223,
    			'caratteristica_id' => 8,
    		),
    		array( // row #261
    			'prodotto_id' => 96,
    			'caratteristica_id' => 8,
    		),
    		array( // row #262
    			'prodotto_id' => 95,
    			'caratteristica_id' => 1,
    		),
    		array( // row #263
    			'prodotto_id' => 95,
    			'caratteristica_id' => 3,
    		),
    		array( // row #264
    			'prodotto_id' => 224,
    			'caratteristica_id' => 1,
    		),
    		array( // row #265
    			'prodotto_id' => 54,
    			'caratteristica_id' => 2,
    		),
    		array( // row #266
    			'prodotto_id' => 97,
    			'caratteristica_id' => 4,
    		),
    		array( // row #267
    			'prodotto_id' => 97,
    			'caratteristica_id' => 1,
    		),
    		array( // row #268
    			'prodotto_id' => 97,
    			'caratteristica_id' => 3,
    		),
    		array( // row #269
    			'prodotto_id' => 97,
    			'caratteristica_id' => 6,
    		),
    		array( // row #270
    			'prodotto_id' => 97,
    			'caratteristica_id' => 5,
    		),
    		array( // row #271
    			'prodotto_id' => 97,
    			'caratteristica_id' => 8,
    		),
    		array( // row #272
    			'prodotto_id' => 98,
    			'caratteristica_id' => 4,
    		),
    		array( // row #273
    			'prodotto_id' => 98,
    			'caratteristica_id' => 1,
    		),
    		array( // row #274
    			'prodotto_id' => 98,
    			'caratteristica_id' => 3,
    		),
    		array( // row #275
    			'prodotto_id' => 98,
    			'caratteristica_id' => 6,
    		),
    		array( // row #276
    			'prodotto_id' => 98,
    			'caratteristica_id' => 5,
    		),
    		array( // row #277
    			'prodotto_id' => 98,
    			'caratteristica_id' => 8,
    		),
    		array( // row #278
    			'prodotto_id' => 99,
    			'caratteristica_id' => 4,
    		),
    		array( // row #279
    			'prodotto_id' => 99,
    			'caratteristica_id' => 1,
    		),
    		array( // row #280
    			'prodotto_id' => 99,
    			'caratteristica_id' => 3,
    		),
    		array( // row #281
    			'prodotto_id' => 99,
    			'caratteristica_id' => 6,
    		),
    		array( // row #282
    			'prodotto_id' => 99,
    			'caratteristica_id' => 2,
    		),
    		array( // row #283
    			'prodotto_id' => 223,
    			'caratteristica_id' => 2,
    		),
    		array( // row #284
    			'prodotto_id' => 99,
    			'caratteristica_id' => 8,
    		),
    		array( // row #285
    			'prodotto_id' => 100,
    			'caratteristica_id' => 4,
    		),
    		array( // row #286
    			'prodotto_id' => 100,
    			'caratteristica_id' => 1,
    		),
    		array( // row #287
    			'prodotto_id' => 100,
    			'caratteristica_id' => 3,
    		),
    		array( // row #288
    			'prodotto_id' => 100,
    			'caratteristica_id' => 6,
    		),
    		array( // row #289
    			'prodotto_id' => 100,
    			'caratteristica_id' => 2,
    		),
    		array( // row #290
    			'prodotto_id' => 223,
    			'caratteristica_id' => 6,
    		),
    		array( // row #291
    			'prodotto_id' => 100,
    			'caratteristica_id' => 8,
    		),
    		array( // row #292
    			'prodotto_id' => 101,
    			'caratteristica_id' => 4,
    		),
    		array( // row #293
    			'prodotto_id' => 101,
    			'caratteristica_id' => 1,
    		),
    		array( // row #294
    			'prodotto_id' => 101,
    			'caratteristica_id' => 3,
    		),
    		array( // row #295
    			'prodotto_id' => 101,
    			'caratteristica_id' => 6,
    		),
    		array( // row #296
    			'prodotto_id' => 101,
    			'caratteristica_id' => 2,
    		),
    		array( // row #297
    			'prodotto_id' => 223,
    			'caratteristica_id' => 3,
    		),
    		array( // row #298
    			'prodotto_id' => 101,
    			'caratteristica_id' => 8,
    		),
    		array( // row #299
    			'prodotto_id' => 102,
    			'caratteristica_id' => 4,
    		),
    		array( // row #300
    			'prodotto_id' => 102,
    			'caratteristica_id' => 1,
    		),
    		array( // row #301
    			'prodotto_id' => 102,
    			'caratteristica_id' => 6,
    		),
    		array( // row #302
    			'prodotto_id' => 102,
    			'caratteristica_id' => 2,
    		),
    		array( // row #303
    			'prodotto_id' => 102,
    			'caratteristica_id' => 5,
    		),
    		array( // row #304
    			'prodotto_id' => 102,
    			'caratteristica_id' => 8,
    		),
    		array( // row #305
    			'prodotto_id' => 103,
    			'caratteristica_id' => 4,
    		),
    		array( // row #306
    			'prodotto_id' => 148,
    			'caratteristica_id' => 4,
    		),
    		array( // row #307
    			'prodotto_id' => 103,
    			'caratteristica_id' => 3,
    		),
    		array( // row #308
    			'prodotto_id' => 103,
    			'caratteristica_id' => 6,
    		),
    		array( // row #309
    			'prodotto_id' => 103,
    			'caratteristica_id' => 2,
    		),
    		array( // row #310
    			'prodotto_id' => 103,
    			'caratteristica_id' => 5,
    		),
    		array( // row #311
    			'prodotto_id' => 103,
    			'caratteristica_id' => 8,
    		),
    		array( // row #312
    			'prodotto_id' => 104,
    			'caratteristica_id' => 4,
    		),
    		array( // row #313
    			'prodotto_id' => 104,
    			'caratteristica_id' => 1,
    		),
    		array( // row #314
    			'prodotto_id' => 104,
    			'caratteristica_id' => 6,
    		),
    		array( // row #315
    			'prodotto_id' => 104,
    			'caratteristica_id' => 2,
    		),
    		array( // row #316
    			'prodotto_id' => 104,
    			'caratteristica_id' => 5,
    		),
    		array( // row #317
    			'prodotto_id' => 104,
    			'caratteristica_id' => 8,
    		),
    		array( // row #318
    			'prodotto_id' => 105,
    			'caratteristica_id' => 4,
    		),
    		array( // row #319
    			'prodotto_id' => 105,
    			'caratteristica_id' => 8,
    		),
    		array( // row #320
    			'prodotto_id' => 106,
    			'caratteristica_id' => 4,
    		),
    		array( // row #321
    			'prodotto_id' => 106,
    			'caratteristica_id' => 6,
    		),
    		array( // row #322
    			'prodotto_id' => 106,
    			'caratteristica_id' => 2,
    		),
    		array( // row #323
    			'prodotto_id' => 106,
    			'caratteristica_id' => 8,
    		),
    		array( // row #324
    			'prodotto_id' => 107,
    			'caratteristica_id' => 4,
    		),
    		array( // row #325
    			'prodotto_id' => 107,
    			'caratteristica_id' => 6,
    		),
    		array( // row #326
    			'prodotto_id' => 107,
    			'caratteristica_id' => 2,
    		),
    		array( // row #327
    			'prodotto_id' => 107,
    			'caratteristica_id' => 8,
    		),
    		array( // row #328
    			'prodotto_id' => 108,
    			'caratteristica_id' => 4,
    		),
    		array( // row #329
    			'prodotto_id' => 108,
    			'caratteristica_id' => 6,
    		),
    		array( // row #330
    			'prodotto_id' => 108,
    			'caratteristica_id' => 5,
    		),
    		array( // row #331
    			'prodotto_id' => 108,
    			'caratteristica_id' => 8,
    		),
    		array( // row #332
    			'prodotto_id' => 109,
    			'caratteristica_id' => 4,
    		),
    		array( // row #333
    			'prodotto_id' => 109,
    			'caratteristica_id' => 6,
    		),
    		array( // row #334
    			'prodotto_id' => 109,
    			'caratteristica_id' => 2,
    		),
    		array( // row #335
    			'prodotto_id' => 109,
    			'caratteristica_id' => 8,
    		),
    		array( // row #336
    			'prodotto_id' => 110,
    			'caratteristica_id' => 1,
    		),
    		array( // row #337
    			'prodotto_id' => 110,
    			'caratteristica_id' => 2,
    		),
    		array( // row #338
    			'prodotto_id' => 110,
    			'caratteristica_id' => 8,
    		),
    		array( // row #339
    			'prodotto_id' => 111,
    			'caratteristica_id' => 1,
    		),
    		array( // row #340
    			'prodotto_id' => 111,
    			'caratteristica_id' => 8,
    		),
    		array( // row #341
    			'prodotto_id' => 75,
    			'caratteristica_id' => 7,
    		),
    		array( // row #342
    			'prodotto_id' => 112,
    			'caratteristica_id' => 4,
    		),
    		array( // row #343
    			'prodotto_id' => 156,
    			'caratteristica_id' => 2,
    		),
    		array( // row #344
    			'prodotto_id' => 112,
    			'caratteristica_id' => 6,
    		),
    		array( // row #345
    			'prodotto_id' => 113,
    			'caratteristica_id' => 4,
    		),
    		array( // row #346
    			'prodotto_id' => 134,
    			'caratteristica_id' => 4,
    		),
    		array( // row #347
    			'prodotto_id' => 113,
    			'caratteristica_id' => 6,
    		),
    		array( // row #348
    			'prodotto_id' => 114,
    			'caratteristica_id' => 1,
    		),
    		array( // row #349
    			'prodotto_id' => 114,
    			'caratteristica_id' => 3,
    		),
    		array( // row #350
    			'prodotto_id' => 114,
    			'caratteristica_id' => 2,
    		),
    		array( // row #351
    			'prodotto_id' => 114,
    			'caratteristica_id' => 8,
    		),
    		array( // row #352
    			'prodotto_id' => 115,
    			'caratteristica_id' => 4,
    		),
    		array( // row #353
    			'prodotto_id' => 115,
    			'caratteristica_id' => 6,
    		),
    		array( // row #354
    			'prodotto_id' => 115,
    			'caratteristica_id' => 8,
    		),
    		array( // row #355
    			'prodotto_id' => 116,
    			'caratteristica_id' => 4,
    		),
    		array( // row #356
    			'prodotto_id' => 116,
    			'caratteristica_id' => 1,
    		),
    		array( // row #357
    			'prodotto_id' => 116,
    			'caratteristica_id' => 6,
    		),
    		array( // row #358
    			'prodotto_id' => 116,
    			'caratteristica_id' => 8,
    		),
    		array( // row #359
    			'prodotto_id' => 117,
    			'caratteristica_id' => 4,
    		),
    		array( // row #360
    			'prodotto_id' => 117,
    			'caratteristica_id' => 1,
    		),
    		array( // row #361
    			'prodotto_id' => 117,
    			'caratteristica_id' => 8,
    		),
    		array( // row #362
    			'prodotto_id' => 118,
    			'caratteristica_id' => 1,
    		),
    		array( // row #363
    			'prodotto_id' => 118,
    			'caratteristica_id' => 2,
    		),
    		array( // row #364
    			'prodotto_id' => 118,
    			'caratteristica_id' => 8,
    		),
    		array( // row #365
    			'prodotto_id' => 119,
    			'caratteristica_id' => 4,
    		),
    		array( // row #366
    			'prodotto_id' => 119,
    			'caratteristica_id' => 1,
    		),
    		array( // row #367
    			'prodotto_id' => 119,
    			'caratteristica_id' => 6,
    		),
    		array( // row #368
    			'prodotto_id' => 119,
    			'caratteristica_id' => 8,
    		),
    		array( // row #369
    			'prodotto_id' => 120,
    			'caratteristica_id' => 7,
    		),
    		array( // row #370
    			'prodotto_id' => 120,
    			'caratteristica_id' => 4,
    		),
    		array( // row #371
    			'prodotto_id' => 120,
    			'caratteristica_id' => 1,
    		),
    		array( // row #372
    			'prodotto_id' => 120,
    			'caratteristica_id' => 6,
    		),
    		array( // row #373
    			'prodotto_id' => 120,
    			'caratteristica_id' => 2,
    		),
    		array( // row #374
    			'prodotto_id' => 120,
    			'caratteristica_id' => 8,
    		),
    		array( // row #375
    			'prodotto_id' => 121,
    			'caratteristica_id' => 1,
    		),
    		array( // row #376
    			'prodotto_id' => 121,
    			'caratteristica_id' => 2,
    		),
    		array( // row #377
    			'prodotto_id' => 121,
    			'caratteristica_id' => 8,
    		),
    		array( // row #378
    			'prodotto_id' => 122,
    			'caratteristica_id' => 6,
    		),
    		array( // row #379
    			'prodotto_id' => 122,
    			'caratteristica_id' => 2,
    		),
    		array( // row #380
    			'prodotto_id' => 122,
    			'caratteristica_id' => 8,
    		),
    		array( // row #381
    			'prodotto_id' => 123,
    			'caratteristica_id' => 4,
    		),
    		array( // row #382
    			'prodotto_id' => 123,
    			'caratteristica_id' => 8,
    		),
    		array( // row #383
    			'prodotto_id' => 124,
    			'caratteristica_id' => 4,
    		),
    		array( // row #384
    			'prodotto_id' => 124,
    			'caratteristica_id' => 6,
    		),
    		array( // row #385
    			'prodotto_id' => 124,
    			'caratteristica_id' => 2,
    		),
    		array( // row #386
    			'prodotto_id' => 125,
    			'caratteristica_id' => 4,
    		),
    		array( // row #387
    			'prodotto_id' => 125,
    			'caratteristica_id' => 1,
    		),
    		array( // row #388
    			'prodotto_id' => 125,
    			'caratteristica_id' => 3,
    		),
    		array( // row #389
    			'prodotto_id' => 125,
    			'caratteristica_id' => 6,
    		),
    		array( // row #390
    			'prodotto_id' => 125,
    			'caratteristica_id' => 2,
    		),
    		array( // row #391
    			'prodotto_id' => 125,
    			'caratteristica_id' => 5,
    		),
    		array( // row #392
    			'prodotto_id' => 125,
    			'caratteristica_id' => 8,
    		),
    		array( // row #393
    			'prodotto_id' => 126,
    			'caratteristica_id' => 4,
    		),
    		array( // row #394
    			'prodotto_id' => 126,
    			'caratteristica_id' => 1,
    		),
    		array( // row #395
    			'prodotto_id' => 126,
    			'caratteristica_id' => 3,
    		),
    		array( // row #396
    			'prodotto_id' => 126,
    			'caratteristica_id' => 6,
    		),
    		array( // row #397
    			'prodotto_id' => 126,
    			'caratteristica_id' => 2,
    		),
    		array( // row #398
    			'prodotto_id' => 126,
    			'caratteristica_id' => 5,
    		),
    		array( // row #399
    			'prodotto_id' => 126,
    			'caratteristica_id' => 8,
    		),
    		array( // row #400
    			'prodotto_id' => 127,
    			'caratteristica_id' => 4,
    		),
    		array( // row #401
    			'prodotto_id' => 127,
    			'caratteristica_id' => 1,
    		),
    		array( // row #402
    			'prodotto_id' => 127,
    			'caratteristica_id' => 3,
    		),
    		array( // row #403
    			'prodotto_id' => 127,
    			'caratteristica_id' => 6,
    		),
    		array( // row #404
    			'prodotto_id' => 127,
    			'caratteristica_id' => 2,
    		),
    		array( // row #405
    			'prodotto_id' => 127,
    			'caratteristica_id' => 5,
    		),
    		array( // row #406
    			'prodotto_id' => 127,
    			'caratteristica_id' => 8,
    		),
    		array( // row #407
    			'prodotto_id' => 128,
    			'caratteristica_id' => 4,
    		),
    		array( // row #408
    			'prodotto_id' => 128,
    			'caratteristica_id' => 1,
    		),
    		array( // row #409
    			'prodotto_id' => 128,
    			'caratteristica_id' => 3,
    		),
    		array( // row #410
    			'prodotto_id' => 128,
    			'caratteristica_id' => 6,
    		),
    		array( // row #411
    			'prodotto_id' => 128,
    			'caratteristica_id' => 2,
    		),
    		array( // row #412
    			'prodotto_id' => 128,
    			'caratteristica_id' => 8,
    		),
    		array( // row #413
    			'prodotto_id' => 129,
    			'caratteristica_id' => 1,
    		),
    		array( // row #414
    			'prodotto_id' => 129,
    			'caratteristica_id' => 2,
    		),
    		array( // row #415
    			'prodotto_id' => 129,
    			'caratteristica_id' => 8,
    		),
    		array( // row #416
    			'prodotto_id' => 130,
    			'caratteristica_id' => 4,
    		),
    		array( // row #417
    			'prodotto_id' => 130,
    			'caratteristica_id' => 1,
    		),
    		array( // row #418
    			'prodotto_id' => 130,
    			'caratteristica_id' => 6,
    		),
    		array( // row #419
    			'prodotto_id' => 130,
    			'caratteristica_id' => 8,
    		),
    		array( // row #420
    			'prodotto_id' => 124,
    			'caratteristica_id' => 8,
    		),
    		array( // row #421
    			'prodotto_id' => 131,
    			'caratteristica_id' => 1,
    		),
    		array( // row #422
    			'prodotto_id' => 131,
    			'caratteristica_id' => 6,
    		),
    		array( // row #423
    			'prodotto_id' => 131,
    			'caratteristica_id' => 8,
    		),
    		array( // row #424
    			'prodotto_id' => 132,
    			'caratteristica_id' => 1,
    		),
    		array( // row #425
    			'prodotto_id' => 132,
    			'caratteristica_id' => 8,
    		),
    		array( // row #426
    			'prodotto_id' => 133,
    			'caratteristica_id' => 1,
    		),
    		array( // row #427
    			'prodotto_id' => 133,
    			'caratteristica_id' => 3,
    		),
    		array( // row #428
    			'prodotto_id' => 133,
    			'caratteristica_id' => 6,
    		),
    		array( // row #429
    			'prodotto_id' => 133,
    			'caratteristica_id' => 2,
    		),
    		array( // row #430
    			'prodotto_id' => 133,
    			'caratteristica_id' => 4,
    		),
    		array( // row #431
    			'prodotto_id' => 133,
    			'caratteristica_id' => 8,
    		),
    		array( // row #432
    			'prodotto_id' => 134,
    			'caratteristica_id' => 1,
    		),
    		array( // row #433
    			'prodotto_id' => 134,
    			'caratteristica_id' => 6,
    		),
    		array( // row #434
    			'prodotto_id' => 134,
    			'caratteristica_id' => 2,
    		),
    		array( // row #435
    			'prodotto_id' => 134,
    			'caratteristica_id' => 8,
    		),
    		array( // row #436
    			'prodotto_id' => 135,
    			'caratteristica_id' => 4,
    		),
    		array( // row #437
    			'prodotto_id' => 135,
    			'caratteristica_id' => 1,
    		),
    		array( // row #438
    			'prodotto_id' => 135,
    			'caratteristica_id' => 6,
    		),
    		array( // row #439
    			'prodotto_id' => 135,
    			'caratteristica_id' => 2,
    		),
    		array( // row #440
    			'prodotto_id' => 135,
    			'caratteristica_id' => 8,
    		),
    		array( // row #441
    			'prodotto_id' => 136,
    			'caratteristica_id' => 6,
    		),
    		array( // row #442
    			'prodotto_id' => 136,
    			'caratteristica_id' => 2,
    		),
    		array( // row #443
    			'prodotto_id' => 136,
    			'caratteristica_id' => 8,
    		),
    		array( // row #444
    			'prodotto_id' => 137,
    			'caratteristica_id' => 4,
    		),
    		array( // row #445
    			'prodotto_id' => 137,
    			'caratteristica_id' => 1,
    		),
    		array( // row #446
    			'prodotto_id' => 137,
    			'caratteristica_id' => 6,
    		),
    		array( // row #447
    			'prodotto_id' => 137,
    			'caratteristica_id' => 2,
    		),
    		array( // row #448
    			'prodotto_id' => 137,
    			'caratteristica_id' => 8,
    		),
    		array( // row #449
    			'prodotto_id' => 138,
    			'caratteristica_id' => 4,
    		),
    		array( // row #450
    			'prodotto_id' => 140,
    			'caratteristica_id' => 4,
    		),
    		array( // row #451
    			'prodotto_id' => 141,
    			'caratteristica_id' => 1,
    		),
    		array( // row #452
    			'prodotto_id' => 141,
    			'caratteristica_id' => 6,
    		),
    		array( // row #453
    			'prodotto_id' => 142,
    			'caratteristica_id' => 4,
    		),
    		array( // row #454
    			'prodotto_id' => 155,
    			'caratteristica_id' => 8,
    		),
    		array( // row #455
    			'prodotto_id' => 143,
    			'caratteristica_id' => 4,
    		),
    		array( // row #456
    			'prodotto_id' => 143,
    			'caratteristica_id' => 3,
    		),
    		array( // row #457
    			'prodotto_id' => 143,
    			'caratteristica_id' => 6,
    		),
    		array( // row #458
    			'prodotto_id' => 143,
    			'caratteristica_id' => 2,
    		),
    		array( // row #459
    			'prodotto_id' => 143,
    			'caratteristica_id' => 5,
    		),
    		array( // row #460
    			'prodotto_id' => 144,
    			'caratteristica_id' => 4,
    		),
    		array( // row #461
    			'prodotto_id' => 144,
    			'caratteristica_id' => 3,
    		),
    		array( // row #462
    			'prodotto_id' => 253,
    			'caratteristica_id' => 3,
    		),
    		array( // row #463
    			'prodotto_id' => 253,
    			'caratteristica_id' => 4,
    		),
    		array( // row #464
    			'prodotto_id' => 250,
    			'caratteristica_id' => 2,
    		),
    		array( // row #465
    			'prodotto_id' => 250,
    			'caratteristica_id' => 6,
    		),
    		array( // row #466
    			'prodotto_id' => 250,
    			'caratteristica_id' => 3,
    		),
    		array( // row #467
    			'prodotto_id' => 146,
    			'caratteristica_id' => 4,
    		),
    		array( // row #468
    			'prodotto_id' => 146,
    			'caratteristica_id' => 2,
    		),
    		array( // row #469
    			'prodotto_id' => 146,
    			'caratteristica_id' => 8,
    		),
    		array( // row #470
    			'prodotto_id' => 147,
    			'caratteristica_id' => 4,
    		),
    		array( // row #471
    			'prodotto_id' => 147,
    			'caratteristica_id' => 6,
    		),
    		array( // row #472
    			'prodotto_id' => 147,
    			'caratteristica_id' => 8,
    		),
    		array( // row #473
    			'prodotto_id' => 150,
    			'caratteristica_id' => 1,
    		),
    		array( // row #474
    			'prodotto_id' => 150,
    			'caratteristica_id' => 6,
    		),
    		array( // row #475
    			'prodotto_id' => 151,
    			'caratteristica_id' => 7,
    		),
    		array( // row #476
    			'prodotto_id' => 151,
    			'caratteristica_id' => 2,
    		),
    		array( // row #477
    			'prodotto_id' => 151,
    			'caratteristica_id' => 5,
    		),
    		array( // row #478
    			'prodotto_id' => 151,
    			'caratteristica_id' => 8,
    		),
    		array( // row #479
    			'prodotto_id' => 152,
    			'caratteristica_id' => 7,
    		),
    		array( // row #480
    			'prodotto_id' => 152,
    			'caratteristica_id' => 2,
    		),
    		array( // row #481
    			'prodotto_id' => 152,
    			'caratteristica_id' => 5,
    		),
    		array( // row #482
    			'prodotto_id' => 152,
    			'caratteristica_id' => 8,
    		),
    		array( // row #483
    			'prodotto_id' => 153,
    			'caratteristica_id' => 7,
    		),
    		array( // row #484
    			'prodotto_id' => 153,
    			'caratteristica_id' => 2,
    		),
    		array( // row #485
    			'prodotto_id' => 153,
    			'caratteristica_id' => 5,
    		),
    		array( // row #486
    			'prodotto_id' => 153,
    			'caratteristica_id' => 8,
    		),
    		array( // row #487
    			'prodotto_id' => 160,
    			'caratteristica_id' => 7,
    		),
    		array( // row #488
    			'prodotto_id' => 160,
    			'caratteristica_id' => 8,
    		),
    		array( // row #489
    			'prodotto_id' => 161,
    			'caratteristica_id' => 7,
    		),
    		array( // row #490
    			'prodotto_id' => 161,
    			'caratteristica_id' => 4,
    		),
    		array( // row #491
    			'prodotto_id' => 161,
    			'caratteristica_id' => 1,
    		),
    		array( // row #492
    			'prodotto_id' => 161,
    			'caratteristica_id' => 3,
    		),
    		array( // row #493
    			'prodotto_id' => 161,
    			'caratteristica_id' => 6,
    		),
    		array( // row #494
    			'prodotto_id' => 161,
    			'caratteristica_id' => 2,
    		),
    		array( // row #495
    			'prodotto_id' => 161,
    			'caratteristica_id' => 5,
    		),
    		array( // row #496
    			'prodotto_id' => 161,
    			'caratteristica_id' => 8,
    		),
    		array( // row #497
    			'prodotto_id' => 162,
    			'caratteristica_id' => 7,
    		),
    		array( // row #498
    			'prodotto_id' => 162,
    			'caratteristica_id' => 4,
    		),
    		array( // row #499
    			'prodotto_id' => 162,
    			'caratteristica_id' => 1,
    		),
    		array( // row #500
    			'prodotto_id' => 162,
    			'caratteristica_id' => 3,
    		),
    		array( // row #501
    			'prodotto_id' => 162,
    			'caratteristica_id' => 6,
    		),
    		array( // row #502
    			'prodotto_id' => 162,
    			'caratteristica_id' => 2,
    		),
    		array( // row #503
    			'prodotto_id' => 162,
    			'caratteristica_id' => 5,
    		),
    		array( // row #504
    			'prodotto_id' => 162,
    			'caratteristica_id' => 8,
    		),
    		array( // row #505
    			'prodotto_id' => 163,
    			'caratteristica_id' => 7,
    		),
    		array( // row #506
    			'prodotto_id' => 163,
    			'caratteristica_id' => 4,
    		),
    		array( // row #507
    			'prodotto_id' => 163,
    			'caratteristica_id' => 1,
    		),
    		array( // row #508
    			'prodotto_id' => 163,
    			'caratteristica_id' => 3,
    		),
    		array( // row #509
    			'prodotto_id' => 163,
    			'caratteristica_id' => 6,
    		),
    		array( // row #510
    			'prodotto_id' => 163,
    			'caratteristica_id' => 2,
    		),
    		array( // row #511
    			'prodotto_id' => 163,
    			'caratteristica_id' => 5,
    		),
    		array( // row #512
    			'prodotto_id' => 163,
    			'caratteristica_id' => 8,
    		),
    		array( // row #513
    			'prodotto_id' => 155,
    			'caratteristica_id' => 5,
    		),
    		array( // row #514
    			'prodotto_id' => 157,
    			'caratteristica_id' => 2,
    		),
    		array( // row #515
    			'prodotto_id' => 157,
    			'caratteristica_id' => 5,
    		),
    		array( // row #516
    			'prodotto_id' => 158,
    			'caratteristica_id' => 2,
    		),
    		array( // row #517
    			'prodotto_id' => 158,
    			'caratteristica_id' => 5,
    		),
    		array( // row #518
    			'prodotto_id' => 156,
    			'caratteristica_id' => 5,
    		),
    		array( // row #519
    			'prodotto_id' => 159,
    			'caratteristica_id' => 2,
    		),
    		array( // row #520
    			'prodotto_id' => 159,
    			'caratteristica_id' => 5,
    		),
    		array( // row #521
    			'prodotto_id' => 160,
    			'caratteristica_id' => 4,
    		),
    		array( // row #522
    			'prodotto_id' => 160,
    			'caratteristica_id' => 1,
    		),
    		array( // row #523
    			'prodotto_id' => 160,
    			'caratteristica_id' => 3,
    		),
    		array( // row #524
    			'prodotto_id' => 160,
    			'caratteristica_id' => 6,
    		),
    		array( // row #525
    			'prodotto_id' => 160,
    			'caratteristica_id' => 2,
    		),
    		array( // row #526
    			'prodotto_id' => 160,
    			'caratteristica_id' => 5,
    		),
    		array( // row #527
    			'prodotto_id' => 164,
    			'caratteristica_id' => 7,
    		),
    		array( // row #528
    			'prodotto_id' => 164,
    			'caratteristica_id' => 4,
    		),
    		array( // row #529
    			'prodotto_id' => 164,
    			'caratteristica_id' => 1,
    		),
    		array( // row #530
    			'prodotto_id' => 164,
    			'caratteristica_id' => 6,
    		),
    		array( // row #531
    			'prodotto_id' => 164,
    			'caratteristica_id' => 2,
    		),
    		array( // row #532
    			'prodotto_id' => 164,
    			'caratteristica_id' => 5,
    		),
    		array( // row #533
    			'prodotto_id' => 164,
    			'caratteristica_id' => 8,
    		),
    		array( // row #534
    			'prodotto_id' => 165,
    			'caratteristica_id' => 7,
    		),
    		array( // row #535
    			'prodotto_id' => 165,
    			'caratteristica_id' => 1,
    		),
    		array( // row #536
    			'prodotto_id' => 165,
    			'caratteristica_id' => 6,
    		),
    		array( // row #537
    			'prodotto_id' => 165,
    			'caratteristica_id' => 2,
    		),
    		array( // row #538
    			'prodotto_id' => 165,
    			'caratteristica_id' => 8,
    		),
    		array( // row #539
    			'prodotto_id' => 166,
    			'caratteristica_id' => 7,
    		),
    		array( // row #540
    			'prodotto_id' => 166,
    			'caratteristica_id' => 4,
    		),
    		array( // row #541
    			'prodotto_id' => 166,
    			'caratteristica_id' => 1,
    		),
    		array( // row #542
    			'prodotto_id' => 166,
    			'caratteristica_id' => 3,
    		),
    		array( // row #543
    			'prodotto_id' => 166,
    			'caratteristica_id' => 2,
    		),
    		array( // row #544
    			'prodotto_id' => 166,
    			'caratteristica_id' => 5,
    		),
    		array( // row #545
    			'prodotto_id' => 166,
    			'caratteristica_id' => 8,
    		),
    		array( // row #546
    			'prodotto_id' => 167,
    			'caratteristica_id' => 7,
    		),
    		array( // row #547
    			'prodotto_id' => 167,
    			'caratteristica_id' => 4,
    		),
    		array( // row #548
    			'prodotto_id' => 167,
    			'caratteristica_id' => 1,
    		),
    		array( // row #549
    			'prodotto_id' => 167,
    			'caratteristica_id' => 3,
    		),
    		array( // row #550
    			'prodotto_id' => 167,
    			'caratteristica_id' => 2,
    		),
    		array( // row #551
    			'prodotto_id' => 167,
    			'caratteristica_id' => 5,
    		),
    		array( // row #552
    			'prodotto_id' => 167,
    			'caratteristica_id' => 8,
    		),
    		array( // row #553
    			'prodotto_id' => 168,
    			'caratteristica_id' => 7,
    		),
    		array( // row #554
    			'prodotto_id' => 168,
    			'caratteristica_id' => 4,
    		),
    		array( // row #555
    			'prodotto_id' => 168,
    			'caratteristica_id' => 1,
    		),
    		array( // row #556
    			'prodotto_id' => 168,
    			'caratteristica_id' => 3,
    		),
    		array( // row #557
    			'prodotto_id' => 168,
    			'caratteristica_id' => 2,
    		),
    		array( // row #558
    			'prodotto_id' => 168,
    			'caratteristica_id' => 5,
    		),
    		array( // row #559
    			'prodotto_id' => 168,
    			'caratteristica_id' => 8,
    		),
    		array( // row #560
    			'prodotto_id' => 169,
    			'caratteristica_id' => 7,
    		),
    		array( // row #561
    			'prodotto_id' => 169,
    			'caratteristica_id' => 4,
    		),
    		array( // row #562
    			'prodotto_id' => 169,
    			'caratteristica_id' => 1,
    		),
    		array( // row #563
    			'prodotto_id' => 169,
    			'caratteristica_id' => 6,
    		),
    		array( // row #564
    			'prodotto_id' => 169,
    			'caratteristica_id' => 2,
    		),
    		array( // row #565
    			'prodotto_id' => 169,
    			'caratteristica_id' => 5,
    		),
    		array( // row #566
    			'prodotto_id' => 169,
    			'caratteristica_id' => 8,
    		),
    		array( // row #567
    			'prodotto_id' => 170,
    			'caratteristica_id' => 3,
    		),
    		array( // row #568
    			'prodotto_id' => 170,
    			'caratteristica_id' => 2,
    		),
    		array( // row #569
    			'prodotto_id' => 170,
    			'caratteristica_id' => 8,
    		),
    		array( // row #570
    			'prodotto_id' => 171,
    			'caratteristica_id' => 7,
    		),
    		array( // row #571
    			'prodotto_id' => 171,
    			'caratteristica_id' => 1,
    		),
    		array( // row #572
    			'prodotto_id' => 171,
    			'caratteristica_id' => 3,
    		),
    		array( // row #573
    			'prodotto_id' => 171,
    			'caratteristica_id' => 2,
    		),
    		array( // row #574
    			'prodotto_id' => 171,
    			'caratteristica_id' => 8,
    		),
    		array( // row #575
    			'prodotto_id' => 172,
    			'caratteristica_id' => 7,
    		),
    		array( // row #576
    			'prodotto_id' => 172,
    			'caratteristica_id' => 1,
    		),
    		array( // row #577
    			'prodotto_id' => 172,
    			'caratteristica_id' => 3,
    		),
    		array( // row #578
    			'prodotto_id' => 172,
    			'caratteristica_id' => 2,
    		),
    		array( // row #579
    			'prodotto_id' => 172,
    			'caratteristica_id' => 8,
    		),
    		array( // row #580
    			'prodotto_id' => 173,
    			'caratteristica_id' => 7,
    		),
    		array( // row #581
    			'prodotto_id' => 173,
    			'caratteristica_id' => 4,
    		),
    		array( // row #582
    			'prodotto_id' => 173,
    			'caratteristica_id' => 1,
    		),
    		array( // row #583
    			'prodotto_id' => 173,
    			'caratteristica_id' => 3,
    		),
    		array( // row #584
    			'prodotto_id' => 173,
    			'caratteristica_id' => 6,
    		),
    		array( // row #585
    			'prodotto_id' => 173,
    			'caratteristica_id' => 2,
    		),
    		array( // row #586
    			'prodotto_id' => 173,
    			'caratteristica_id' => 5,
    		),
    		array( // row #587
    			'prodotto_id' => 173,
    			'caratteristica_id' => 8,
    		),
    		array( // row #588
    			'prodotto_id' => 174,
    			'caratteristica_id' => 7,
    		),
    		array( // row #589
    			'prodotto_id' => 174,
    			'caratteristica_id' => 4,
    		),
    		array( // row #590
    			'prodotto_id' => 174,
    			'caratteristica_id' => 1,
    		),
    		array( // row #591
    			'prodotto_id' => 174,
    			'caratteristica_id' => 3,
    		),
    		array( // row #592
    			'prodotto_id' => 174,
    			'caratteristica_id' => 6,
    		),
    		array( // row #593
    			'prodotto_id' => 174,
    			'caratteristica_id' => 2,
    		),
    		array( // row #594
    			'prodotto_id' => 174,
    			'caratteristica_id' => 8,
    		),
    		array( // row #595
    			'prodotto_id' => 175,
    			'caratteristica_id' => 7,
    		),
    		array( // row #596
    			'prodotto_id' => 175,
    			'caratteristica_id' => 4,
    		),
    		array( // row #597
    			'prodotto_id' => 175,
    			'caratteristica_id' => 1,
    		),
    		array( // row #598
    			'prodotto_id' => 175,
    			'caratteristica_id' => 3,
    		),
    		array( // row #599
    			'prodotto_id' => 175,
    			'caratteristica_id' => 6,
    		),
    		array( // row #600
    			'prodotto_id' => 175,
    			'caratteristica_id' => 2,
    		),
    		array( // row #601
    			'prodotto_id' => 175,
    			'caratteristica_id' => 5,
    		),
    		array( // row #602
    			'prodotto_id' => 175,
    			'caratteristica_id' => 8,
    		),
    		array( // row #603
    			'prodotto_id' => 176,
    			'caratteristica_id' => 7,
    		),
    		array( // row #604
    			'prodotto_id' => 176,
    			'caratteristica_id' => 1,
    		),
    		array( // row #605
    			'prodotto_id' => 176,
    			'caratteristica_id' => 3,
    		),
    		array( // row #606
    			'prodotto_id' => 176,
    			'caratteristica_id' => 6,
    		),
    		array( // row #607
    			'prodotto_id' => 176,
    			'caratteristica_id' => 2,
    		),
    		array( // row #608
    			'prodotto_id' => 176,
    			'caratteristica_id' => 8,
    		),
    		array( // row #609
    			'prodotto_id' => 177,
    			'caratteristica_id' => 7,
    		),
    		array( // row #610
    			'prodotto_id' => 177,
    			'caratteristica_id' => 1,
    		),
    		array( // row #611
    			'prodotto_id' => 177,
    			'caratteristica_id' => 3,
    		),
    		array( // row #612
    			'prodotto_id' => 177,
    			'caratteristica_id' => 6,
    		),
    		array( // row #613
    			'prodotto_id' => 177,
    			'caratteristica_id' => 2,
    		),
    		array( // row #614
    			'prodotto_id' => 177,
    			'caratteristica_id' => 8,
    		),
    		array( // row #615
    			'prodotto_id' => 178,
    			'caratteristica_id' => 7,
    		),
    		array( // row #616
    			'prodotto_id' => 178,
    			'caratteristica_id' => 4,
    		),
    		array( // row #617
    			'prodotto_id' => 178,
    			'caratteristica_id' => 1,
    		),
    		array( // row #618
    			'prodotto_id' => 178,
    			'caratteristica_id' => 3,
    		),
    		array( // row #619
    			'prodotto_id' => 178,
    			'caratteristica_id' => 6,
    		),
    		array( // row #620
    			'prodotto_id' => 178,
    			'caratteristica_id' => 2,
    		),
    		array( // row #621
    			'prodotto_id' => 178,
    			'caratteristica_id' => 5,
    		),
    		array( // row #622
    			'prodotto_id' => 178,
    			'caratteristica_id' => 8,
    		),
    		array( // row #623
    			'prodotto_id' => 179,
    			'caratteristica_id' => 7,
    		),
    		array( // row #624
    			'prodotto_id' => 179,
    			'caratteristica_id' => 4,
    		),
    		array( // row #625
    			'prodotto_id' => 179,
    			'caratteristica_id' => 1,
    		),
    		array( // row #626
    			'prodotto_id' => 179,
    			'caratteristica_id' => 3,
    		),
    		array( // row #627
    			'prodotto_id' => 179,
    			'caratteristica_id' => 6,
    		),
    		array( // row #628
    			'prodotto_id' => 179,
    			'caratteristica_id' => 2,
    		),
    		array( // row #629
    			'prodotto_id' => 179,
    			'caratteristica_id' => 8,
    		),
    		array( // row #630
    			'prodotto_id' => 180,
    			'caratteristica_id' => 7,
    		),
    		array( // row #631
    			'prodotto_id' => 180,
    			'caratteristica_id' => 4,
    		),
    		array( // row #632
    			'prodotto_id' => 180,
    			'caratteristica_id' => 1,
    		),
    		array( // row #633
    			'prodotto_id' => 180,
    			'caratteristica_id' => 6,
    		),
    		array( // row #634
    			'prodotto_id' => 180,
    			'caratteristica_id' => 2,
    		),
    		array( // row #635
    			'prodotto_id' => 180,
    			'caratteristica_id' => 5,
    		),
    		array( // row #636
    			'prodotto_id' => 180,
    			'caratteristica_id' => 8,
    		),
    		array( // row #637
    			'prodotto_id' => 181,
    			'caratteristica_id' => 7,
    		),
    		array( // row #638
    			'prodotto_id' => 181,
    			'caratteristica_id' => 4,
    		),
    		array( // row #639
    			'prodotto_id' => 181,
    			'caratteristica_id' => 1,
    		),
    		array( // row #640
    			'prodotto_id' => 181,
    			'caratteristica_id' => 6,
    		),
    		array( // row #641
    			'prodotto_id' => 181,
    			'caratteristica_id' => 2,
    		),
    		array( // row #642
    			'prodotto_id' => 181,
    			'caratteristica_id' => 5,
    		),
    		array( // row #643
    			'prodotto_id' => 181,
    			'caratteristica_id' => 8,
    		),
    		array( // row #644
    			'prodotto_id' => 182,
    			'caratteristica_id' => 7,
    		),
    		array( // row #645
    			'prodotto_id' => 182,
    			'caratteristica_id' => 4,
    		),
    		array( // row #646
    			'prodotto_id' => 182,
    			'caratteristica_id' => 1,
    		),
    		array( // row #647
    			'prodotto_id' => 182,
    			'caratteristica_id' => 3,
    		),
    		array( // row #648
    			'prodotto_id' => 182,
    			'caratteristica_id' => 6,
    		),
    		array( // row #649
    			'prodotto_id' => 182,
    			'caratteristica_id' => 2,
    		),
    		array( // row #650
    			'prodotto_id' => 182,
    			'caratteristica_id' => 5,
    		),
    		array( // row #651
    			'prodotto_id' => 182,
    			'caratteristica_id' => 8,
    		),
    		array( // row #652
    			'prodotto_id' => 183,
    			'caratteristica_id' => 4,
    		),
    		array( // row #653
    			'prodotto_id' => 183,
    			'caratteristica_id' => 3,
    		),
    		array( // row #654
    			'prodotto_id' => 183,
    			'caratteristica_id' => 6,
    		),
    		array( // row #655
    			'prodotto_id' => 183,
    			'caratteristica_id' => 2,
    		),
    		array( // row #656
    			'prodotto_id' => 183,
    			'caratteristica_id' => 5,
    		),
    		array( // row #657
    			'prodotto_id' => 185,
    			'caratteristica_id' => 7,
    		),
    		array( // row #658
    			'prodotto_id' => 184,
    			'caratteristica_id' => 8,
    		),
    		array( // row #659
    			'prodotto_id' => 185,
    			'caratteristica_id' => 4,
    		),
    		array( // row #660
    			'prodotto_id' => 185,
    			'caratteristica_id' => 1,
    		),
    		array( // row #661
    			'prodotto_id' => 185,
    			'caratteristica_id' => 6,
    		),
    		array( // row #662
    			'prodotto_id' => 185,
    			'caratteristica_id' => 2,
    		),
    		array( // row #663
    			'prodotto_id' => 185,
    			'caratteristica_id' => 5,
    		),
    		array( // row #664
    			'prodotto_id' => 186,
    			'caratteristica_id' => 2,
    		),
    		array( // row #665
    			'prodotto_id' => 186,
    			'caratteristica_id' => 8,
    		),
    		array( // row #666
    			'prodotto_id' => 187,
    			'caratteristica_id' => 4,
    		),
    		array( // row #667
    			'prodotto_id' => 187,
    			'caratteristica_id' => 1,
    		),
    		array( // row #668
    			'prodotto_id' => 187,
    			'caratteristica_id' => 3,
    		),
    		array( // row #669
    			'prodotto_id' => 187,
    			'caratteristica_id' => 6,
    		),
    		array( // row #670
    			'prodotto_id' => 187,
    			'caratteristica_id' => 2,
    		),
    		array( // row #671
    			'prodotto_id' => 187,
    			'caratteristica_id' => 5,
    		),
    		array( // row #672
    			'prodotto_id' => 187,
    			'caratteristica_id' => 8,
    		),
    		array( // row #673
    			'prodotto_id' => 188,
    			'caratteristica_id' => 4,
    		),
    		array( // row #674
    			'prodotto_id' => 188,
    			'caratteristica_id' => 6,
    		),
    		array( // row #675
    			'prodotto_id' => 189,
    			'caratteristica_id' => 4,
    		),
    		array( // row #676
    			'prodotto_id' => 189,
    			'caratteristica_id' => 5,
    		),
    		array( // row #677
    			'prodotto_id' => 190,
    			'caratteristica_id' => 4,
    		),
    		array( // row #678
    			'prodotto_id' => 190,
    			'caratteristica_id' => 6,
    		),
    		array( // row #679
    			'prodotto_id' => 190,
    			'caratteristica_id' => 5,
    		),
    		array( // row #680
    			'prodotto_id' => 189,
    			'caratteristica_id' => 6,
    		),
    		array( // row #681
    			'prodotto_id' => 191,
    			'caratteristica_id' => 4,
    		),
    		array( // row #682
    			'prodotto_id' => 192,
    			'caratteristica_id' => 4,
    		),
    		array( // row #683
    			'prodotto_id' => 192,
    			'caratteristica_id' => 3,
    		),
    		array( // row #684
    			'prodotto_id' => 192,
    			'caratteristica_id' => 6,
    		),
    		array( // row #685
    			'prodotto_id' => 192,
    			'caratteristica_id' => 2,
    		),
    		array( // row #686
    			'prodotto_id' => 192,
    			'caratteristica_id' => 5,
    		),
    		array( // row #687
    			'prodotto_id' => 192,
    			'caratteristica_id' => 8,
    		),
    		array( // row #688
    			'prodotto_id' => 193,
    			'caratteristica_id' => 7,
    		),
    		array( // row #689
    			'prodotto_id' => 193,
    			'caratteristica_id' => 1,
    		),
    		array( // row #690
    			'prodotto_id' => 193,
    			'caratteristica_id' => 6,
    		),
    		array( // row #691
    			'prodotto_id' => 193,
    			'caratteristica_id' => 2,
    		),
    		array( // row #692
    			'prodotto_id' => 193,
    			'caratteristica_id' => 8,
    		),
    		array( // row #693
    			'prodotto_id' => 194,
    			'caratteristica_id' => 7,
    		),
    		array( // row #694
    			'prodotto_id' => 194,
    			'caratteristica_id' => 1,
    		),
    		array( // row #695
    			'prodotto_id' => 194,
    			'caratteristica_id' => 6,
    		),
    		array( // row #696
    			'prodotto_id' => 194,
    			'caratteristica_id' => 2,
    		),
    		array( // row #697
    			'prodotto_id' => 194,
    			'caratteristica_id' => 8,
    		),
    		array( // row #698
    			'prodotto_id' => 195,
    			'caratteristica_id' => 7,
    		),
    		array( // row #699
    			'prodotto_id' => 195,
    			'caratteristica_id' => 4,
    		),
    		array( // row #700
    			'prodotto_id' => 195,
    			'caratteristica_id' => 6,
    		),
    		array( // row #701
    			'prodotto_id' => 196,
    			'caratteristica_id' => 7,
    		),
    		array( // row #702
    			'prodotto_id' => 196,
    			'caratteristica_id' => 4,
    		),
    		array( // row #703
    			'prodotto_id' => 196,
    			'caratteristica_id' => 1,
    		),
    		array( // row #704
    			'prodotto_id' => 196,
    			'caratteristica_id' => 6,
    		),
    		array( // row #705
    			'prodotto_id' => 196,
    			'caratteristica_id' => 2,
    		),
    		array( // row #706
    			'prodotto_id' => 196,
    			'caratteristica_id' => 8,
    		),
    		array( // row #707
    			'prodotto_id' => 197,
    			'caratteristica_id' => 7,
    		),
    		array( // row #708
    			'prodotto_id' => 197,
    			'caratteristica_id' => 4,
    		),
    		array( // row #709
    			'prodotto_id' => 197,
    			'caratteristica_id' => 1,
    		),
    		array( // row #710
    			'prodotto_id' => 197,
    			'caratteristica_id' => 6,
    		),
    		array( // row #711
    			'prodotto_id' => 197,
    			'caratteristica_id' => 2,
    		),
    		array( // row #712
    			'prodotto_id' => 197,
    			'caratteristica_id' => 8,
    		),
    		array( // row #713
    			'prodotto_id' => 198,
    			'caratteristica_id' => 7,
    		),
    		array( // row #714
    			'prodotto_id' => 198,
    			'caratteristica_id' => 4,
    		),
    		array( // row #715
    			'prodotto_id' => 198,
    			'caratteristica_id' => 1,
    		),
    		array( // row #716
    			'prodotto_id' => 198,
    			'caratteristica_id' => 6,
    		),
    		array( // row #717
    			'prodotto_id' => 198,
    			'caratteristica_id' => 2,
    		),
    		array( // row #718
    			'prodotto_id' => 198,
    			'caratteristica_id' => 8,
    		),
    		array( // row #719
    			'prodotto_id' => 199,
    			'caratteristica_id' => 7,
    		),
    		array( // row #720
    			'prodotto_id' => 199,
    			'caratteristica_id' => 4,
    		),
    		array( // row #721
    			'prodotto_id' => 199,
    			'caratteristica_id' => 1,
    		),
    		array( // row #722
    			'prodotto_id' => 199,
    			'caratteristica_id' => 2,
    		),
    		array( // row #723
    			'prodotto_id' => 199,
    			'caratteristica_id' => 5,
    		),
    		array( // row #724
    			'prodotto_id' => 199,
    			'caratteristica_id' => 8,
    		),
    		array( // row #725
    			'prodotto_id' => 204,
    			'caratteristica_id' => 6,
    		),
    		array( // row #726
    			'prodotto_id' => 204,
    			'caratteristica_id' => 8,
    		),
    		array( // row #727
    			'prodotto_id' => 205,
    			'caratteristica_id' => 8,
    		),
    		array( // row #728
    			'prodotto_id' => 206,
    			'caratteristica_id' => 7,
    		),
    		array( // row #729
    			'prodotto_id' => 206,
    			'caratteristica_id' => 4,
    		),
    		array( // row #730
    			'prodotto_id' => 206,
    			'caratteristica_id' => 1,
    		),
    		array( // row #731
    			'prodotto_id' => 206,
    			'caratteristica_id' => 2,
    		),
    		array( // row #732
    			'prodotto_id' => 206,
    			'caratteristica_id' => 5,
    		),
    		array( // row #733
    			'prodotto_id' => 206,
    			'caratteristica_id' => 8,
    		),
    		array( // row #734
    			'prodotto_id' => 139,
    			'caratteristica_id' => 4,
    		),
    		array( // row #735
    			'prodotto_id' => 219,
    			'caratteristica_id' => 2,
    		),
    		array( // row #736
    			'prodotto_id' => 149,
    			'caratteristica_id' => 4,
    		),
    		array( // row #737
    			'prodotto_id' => 219,
    			'caratteristica_id' => 4,
    		),
    		array( // row #738
    			'prodotto_id' => 207,
    			'caratteristica_id' => 7,
    		),
    		array( // row #739
    			'prodotto_id' => 207,
    			'caratteristica_id' => 4,
    		),
    		array( // row #740
    			'prodotto_id' => 207,
    			'caratteristica_id' => 1,
    		),
    		array( // row #741
    			'prodotto_id' => 207,
    			'caratteristica_id' => 3,
    		),
    		array( // row #742
    			'prodotto_id' => 207,
    			'caratteristica_id' => 6,
    		),
    		array( // row #743
    			'prodotto_id' => 207,
    			'caratteristica_id' => 2,
    		),
    		array( // row #744
    			'prodotto_id' => 207,
    			'caratteristica_id' => 5,
    		),
    		array( // row #745
    			'prodotto_id' => 207,
    			'caratteristica_id' => 8,
    		),
    		array( // row #746
    			'prodotto_id' => 183,
    			'caratteristica_id' => 1,
    		),
    		array( // row #747
    			'prodotto_id' => 183,
    			'caratteristica_id' => 8,
    		),
    		array( // row #748
    			'prodotto_id' => 208,
    			'caratteristica_id' => 4,
    		),
    		array( // row #749
    			'prodotto_id' => 209,
    			'caratteristica_id' => 4,
    		),
    		array( // row #750
    			'prodotto_id' => 210,
    			'caratteristica_id' => 4,
    		),
    		array( // row #751
    			'prodotto_id' => 212,
    			'caratteristica_id' => 1,
    		),
    		array( // row #752
    			'prodotto_id' => 212,
    			'caratteristica_id' => 3,
    		),
    		array( // row #753
    			'prodotto_id' => 212,
    			'caratteristica_id' => 2,
    		),
    		array( // row #754
    			'prodotto_id' => 213,
    			'caratteristica_id' => 4,
    		),
    		array( // row #755
    			'prodotto_id' => 213,
    			'caratteristica_id' => 1,
    		),
    		array( // row #756
    			'prodotto_id' => 213,
    			'caratteristica_id' => 3,
    		),
    		array( // row #757
    			'prodotto_id' => 213,
    			'caratteristica_id' => 6,
    		),
    		array( // row #758
    			'prodotto_id' => 213,
    			'caratteristica_id' => 2,
    		),
    		array( // row #759
    			'prodotto_id' => 214,
    			'caratteristica_id' => 4,
    		),
    		array( // row #760
    			'prodotto_id' => 214,
    			'caratteristica_id' => 1,
    		),
    		array( // row #761
    			'prodotto_id' => 214,
    			'caratteristica_id' => 3,
    		),
    		array( // row #762
    			'prodotto_id' => 214,
    			'caratteristica_id' => 2,
    		),
    		array( // row #763
    			'prodotto_id' => 215,
    			'caratteristica_id' => 4,
    		),
    		array( // row #764
    			'prodotto_id' => 215,
    			'caratteristica_id' => 1,
    		),
    		array( // row #765
    			'prodotto_id' => 215,
    			'caratteristica_id' => 3,
    		),
    		array( // row #766
    			'prodotto_id' => 216,
    			'caratteristica_id' => 1,
    		),
    		array( // row #767
    			'prodotto_id' => 216,
    			'caratteristica_id' => 3,
    		),
    		array( // row #768
    			'prodotto_id' => 216,
    			'caratteristica_id' => 6,
    		),
    		array( // row #769
    			'prodotto_id' => 216,
    			'caratteristica_id' => 2,
    		),
    		array( // row #770
    			'prodotto_id' => 216,
    			'caratteristica_id' => 8,
    		),
    		array( // row #771
    			'prodotto_id' => 203,
    			'caratteristica_id' => 4,
    		),
    		array( // row #772
    			'prodotto_id' => 203,
    			'caratteristica_id' => 3,
    		),
    		array( // row #773
    			'prodotto_id' => 203,
    			'caratteristica_id' => 6,
    		),
    		array( // row #774
    			'prodotto_id' => 203,
    			'caratteristica_id' => 2,
    		),
    		array( // row #775
    			'prodotto_id' => 203,
    			'caratteristica_id' => 5,
    		),
    		array( // row #776
    			'prodotto_id' => 217,
    			'caratteristica_id' => 4,
    		),
    		array( // row #777
    			'prodotto_id' => 217,
    			'caratteristica_id' => 1,
    		),
    		array( // row #778
    			'prodotto_id' => 217,
    			'caratteristica_id' => 3,
    		),
    		array( // row #779
    			'prodotto_id' => 217,
    			'caratteristica_id' => 6,
    		),
    		array( // row #780
    			'prodotto_id' => 217,
    			'caratteristica_id' => 2,
    		),
    		array( // row #781
    			'prodotto_id' => 217,
    			'caratteristica_id' => 5,
    		),
    		array( // row #782
    			'prodotto_id' => 218,
    			'caratteristica_id' => 4,
    		),
    		array( // row #783
    			'prodotto_id' => 218,
    			'caratteristica_id' => 3,
    		),
    		array( // row #784
    			'prodotto_id' => 218,
    			'caratteristica_id' => 6,
    		),
    		array( // row #785
    			'prodotto_id' => 218,
    			'caratteristica_id' => 2,
    		),
    		array( // row #786
    			'prodotto_id' => 218,
    			'caratteristica_id' => 5,
    		),
    		array( // row #787
    			'prodotto_id' => 219,
    			'caratteristica_id' => 8,
    		),
    		array( // row #788
    			'prodotto_id' => 220,
    			'caratteristica_id' => 2,
    		),
    		array( // row #789
    			'prodotto_id' => 220,
    			'caratteristica_id' => 8,
    		),
    		array( // row #790
    			'prodotto_id' => 222,
    			'caratteristica_id' => 4,
    		),
    		array( // row #791
    			'prodotto_id' => 222,
    			'caratteristica_id' => 1,
    		),
    		array( // row #792
    			'prodotto_id' => 222,
    			'caratteristica_id' => 3,
    		),
    		array( // row #793
    			'prodotto_id' => 222,
    			'caratteristica_id' => 6,
    		),
    		array( // row #794
    			'prodotto_id' => 222,
    			'caratteristica_id' => 2,
    		),
    		array( // row #795
    			'prodotto_id' => 222,
    			'caratteristica_id' => 5,
    		),
    		array( // row #796
    			'prodotto_id' => 250,
    			'caratteristica_id' => 1,
    		),
    		array( // row #797
    			'prodotto_id' => 221,
    			'caratteristica_id' => 4,
    		),
    		array( // row #798
    			'prodotto_id' => 221,
    			'caratteristica_id' => 1,
    		),
    		array( // row #799
    			'prodotto_id' => 221,
    			'caratteristica_id' => 3,
    		),
    		array( // row #800
    			'prodotto_id' => 221,
    			'caratteristica_id' => 6,
    		),
    		array( // row #801
    			'prodotto_id' => 221,
    			'caratteristica_id' => 2,
    		),
    		array( // row #802
    			'prodotto_id' => 221,
    			'caratteristica_id' => 5,
    		),
    		array( // row #803
    			'prodotto_id' => 250,
    			'caratteristica_id' => 4,
    		),
    		array( // row #804
    			'prodotto_id' => 224,
    			'caratteristica_id' => 6,
    		),
    		array( // row #805
    			'prodotto_id' => 224,
    			'caratteristica_id' => 2,
    		),
    		array( // row #806
    			'prodotto_id' => 224,
    			'caratteristica_id' => 5,
    		),
    		array( // row #807
    			'prodotto_id' => 224,
    			'caratteristica_id' => 8,
    		),
    		array( // row #808
    			'prodotto_id' => 225,
    			'caratteristica_id' => 7,
    		),
    		array( // row #809
    			'prodotto_id' => 225,
    			'caratteristica_id' => 4,
    		),
    		array( // row #810
    			'prodotto_id' => 225,
    			'caratteristica_id' => 1,
    		),
    		array( // row #811
    			'prodotto_id' => 225,
    			'caratteristica_id' => 3,
    		),
    		array( // row #812
    			'prodotto_id' => 225,
    			'caratteristica_id' => 6,
    		),
    		array( // row #813
    			'prodotto_id' => 225,
    			'caratteristica_id' => 2,
    		),
    		array( // row #814
    			'prodotto_id' => 225,
    			'caratteristica_id' => 5,
    		),
    		array( // row #815
    			'prodotto_id' => 226,
    			'caratteristica_id' => 7,
    		),
    		array( // row #816
    			'prodotto_id' => 226,
    			'caratteristica_id' => 4,
    		),
    		array( // row #817
    			'prodotto_id' => 226,
    			'caratteristica_id' => 1,
    		),
    		array( // row #818
    			'prodotto_id' => 226,
    			'caratteristica_id' => 3,
    		),
    		array( // row #819
    			'prodotto_id' => 226,
    			'caratteristica_id' => 2,
    		),
    		array( // row #820
    			'prodotto_id' => 226,
    			'caratteristica_id' => 5,
    		),
    		array( // row #821
    			'prodotto_id' => 227,
    			'caratteristica_id' => 4,
    		),
    		array( // row #822
    			'prodotto_id' => 227,
    			'caratteristica_id' => 6,
    		),
    		array( // row #823
    			'prodotto_id' => 228,
    			'caratteristica_id' => 4,
    		),
    		array( // row #824
    			'prodotto_id' => 228,
    			'caratteristica_id' => 3,
    		),
    		array( // row #825
    			'prodotto_id' => 228,
    			'caratteristica_id' => 6,
    		),
    		array( // row #826
    			'prodotto_id' => 228,
    			'caratteristica_id' => 2,
    		),
    		array( // row #827
    			'prodotto_id' => 229,
    			'caratteristica_id' => 4,
    		),
    		array( // row #828
    			'prodotto_id' => 229,
    			'caratteristica_id' => 6,
    		),
    		array( // row #829
    			'prodotto_id' => 229,
    			'caratteristica_id' => 2,
    		),
    		array( // row #830
    			'prodotto_id' => 230,
    			'caratteristica_id' => 4,
    		),
    		array( // row #831
    			'prodotto_id' => 230,
    			'caratteristica_id' => 6,
    		),
    		array( // row #832
    			'prodotto_id' => 231,
    			'caratteristica_id' => 4,
    		),
    		array( // row #833
    			'prodotto_id' => 231,
    			'caratteristica_id' => 3,
    		),
    		array( // row #834
    			'prodotto_id' => 231,
    			'caratteristica_id' => 6,
    		),
    		array( // row #835
    			'prodotto_id' => 231,
    			'caratteristica_id' => 8,
    		),
    		array( // row #836
    			'prodotto_id' => 232,
    			'caratteristica_id' => 7,
    		),
    		array( // row #837
    			'prodotto_id' => 232,
    			'caratteristica_id' => 4,
    		),
    		array( // row #838
    			'prodotto_id' => 232,
    			'caratteristica_id' => 1,
    		),
    		array( // row #839
    			'prodotto_id' => 232,
    			'caratteristica_id' => 6,
    		),
    		array( // row #840
    			'prodotto_id' => 232,
    			'caratteristica_id' => 2,
    		),
    		array( // row #841
    			'prodotto_id' => 232,
    			'caratteristica_id' => 5,
    		),
    		array( // row #842
    			'prodotto_id' => 233,
    			'caratteristica_id' => 4,
    		),
    		array( // row #843
    			'prodotto_id' => 233,
    			'caratteristica_id' => 1,
    		),
    		array( // row #844
    			'prodotto_id' => 233,
    			'caratteristica_id' => 3,
    		),
    		array( // row #845
    			'prodotto_id' => 233,
    			'caratteristica_id' => 6,
    		),
    		array( // row #846
    			'prodotto_id' => 233,
    			'caratteristica_id' => 2,
    		),
    		array( // row #847
    			'prodotto_id' => 233,
    			'caratteristica_id' => 5,
    		),
    		array( // row #848
    			'prodotto_id' => 234,
    			'caratteristica_id' => 4,
    		),
    		array( // row #849
    			'prodotto_id' => 234,
    			'caratteristica_id' => 1,
    		),
    		array( // row #850
    			'prodotto_id' => 234,
    			'caratteristica_id' => 3,
    		),
    		array( // row #851
    			'prodotto_id' => 234,
    			'caratteristica_id' => 6,
    		),
    		array( // row #852
    			'prodotto_id' => 234,
    			'caratteristica_id' => 2,
    		),
    		array( // row #853
    			'prodotto_id' => 234,
    			'caratteristica_id' => 5,
    		),
    		array( // row #854
    			'prodotto_id' => 235,
    			'caratteristica_id' => 4,
    		),
    		array( // row #855
    			'prodotto_id' => 235,
    			'caratteristica_id' => 1,
    		),
    		array( // row #856
    			'prodotto_id' => 235,
    			'caratteristica_id' => 3,
    		),
    		array( // row #857
    			'prodotto_id' => 235,
    			'caratteristica_id' => 6,
    		),
    		array( // row #858
    			'prodotto_id' => 235,
    			'caratteristica_id' => 2,
    		),
    		array( // row #859
    			'prodotto_id' => 235,
    			'caratteristica_id' => 5,
    		),
    		array( // row #860
    			'prodotto_id' => 236,
    			'caratteristica_id' => 4,
    		),
    		array( // row #861
    			'prodotto_id' => 236,
    			'caratteristica_id' => 1,
    		),
    		array( // row #862
    			'prodotto_id' => 236,
    			'caratteristica_id' => 3,
    		),
    		array( // row #863
    			'prodotto_id' => 236,
    			'caratteristica_id' => 6,
    		),
    		array( // row #864
    			'prodotto_id' => 236,
    			'caratteristica_id' => 2,
    		),
    		array( // row #865
    			'prodotto_id' => 236,
    			'caratteristica_id' => 5,
    		),
    		array( // row #866
    			'prodotto_id' => 237,
    			'caratteristica_id' => 4,
    		),
    		array( // row #867
    			'prodotto_id' => 237,
    			'caratteristica_id' => 1,
    		),
    		array( // row #868
    			'prodotto_id' => 237,
    			'caratteristica_id' => 3,
    		),
    		array( // row #869
    			'prodotto_id' => 237,
    			'caratteristica_id' => 6,
    		),
    		array( // row #870
    			'prodotto_id' => 237,
    			'caratteristica_id' => 5,
    		),
    		array( // row #871
    			'prodotto_id' => 238,
    			'caratteristica_id' => 4,
    		),
    		array( // row #872
    			'prodotto_id' => 238,
    			'caratteristica_id' => 3,
    		),
    		array( // row #873
    			'prodotto_id' => 238,
    			'caratteristica_id' => 6,
    		),
    		array( // row #874
    			'prodotto_id' => 239,
    			'caratteristica_id' => 1,
    		),
    		array( // row #875
    			'prodotto_id' => 239,
    			'caratteristica_id' => 3,
    		),
    		array( // row #876
    			'prodotto_id' => 239,
    			'caratteristica_id' => 2,
    		),
    		array( // row #877
    			'prodotto_id' => 241,
    			'caratteristica_id' => 1,
    		),
    		array( // row #878
    			'prodotto_id' => 241,
    			'caratteristica_id' => 3,
    		),
    		array( // row #879
    			'prodotto_id' => 241,
    			'caratteristica_id' => 2,
    		),
    		array( // row #880
    			'prodotto_id' => 240,
    			'caratteristica_id' => 1,
    		),
    		array( // row #881
    			'prodotto_id' => 240,
    			'caratteristica_id' => 3,
    		),
    		array( // row #882
    			'prodotto_id' => 240,
    			'caratteristica_id' => 2,
    		),
    		array( // row #883
    			'prodotto_id' => 242,
    			'caratteristica_id' => 4,
    		),
    		array( // row #884
    			'prodotto_id' => 242,
    			'caratteristica_id' => 1,
    		),
    		array( // row #885
    			'prodotto_id' => 242,
    			'caratteristica_id' => 3,
    		),
    		array( // row #886
    			'prodotto_id' => 242,
    			'caratteristica_id' => 6,
    		),
    		array( // row #887
    			'prodotto_id' => 242,
    			'caratteristica_id' => 2,
    		),
    		array( // row #888
    			'prodotto_id' => 242,
    			'caratteristica_id' => 5,
    		),
    		array( // row #889
    			'prodotto_id' => 243,
    			'caratteristica_id' => 4,
    		),
    		array( // row #890
    			'prodotto_id' => 243,
    			'caratteristica_id' => 1,
    		),
    		array( // row #891
    			'prodotto_id' => 243,
    			'caratteristica_id' => 3,
    		),
    		array( // row #892
    			'prodotto_id' => 243,
    			'caratteristica_id' => 6,
    		),
    		array( // row #893
    			'prodotto_id' => 243,
    			'caratteristica_id' => 2,
    		),
    		array( // row #894
    			'prodotto_id' => 243,
    			'caratteristica_id' => 5,
    		),
    		array( // row #895
    			'prodotto_id' => 244,
    			'caratteristica_id' => 4,
    		),
    		array( // row #896
    			'prodotto_id' => 244,
    			'caratteristica_id' => 1,
    		),
    		array( // row #897
    			'prodotto_id' => 244,
    			'caratteristica_id' => 3,
    		),
    		array( // row #898
    			'prodotto_id' => 244,
    			'caratteristica_id' => 6,
    		),
    		array( // row #899
    			'prodotto_id' => 244,
    			'caratteristica_id' => 2,
    		),
    		array( // row #900
    			'prodotto_id' => 244,
    			'caratteristica_id' => 5,
    		),
    		array( // row #901
    			'prodotto_id' => 134,
    			'caratteristica_id' => 3,
    		),
    	);
	  DB::statement('SET FOREIGN_KEY_CHECKS=0;');
      DB::table('tblCaratteristicheProdotti')->insert($prodotto_ha_caratteristica);
      DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}


