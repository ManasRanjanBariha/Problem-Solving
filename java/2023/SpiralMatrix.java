package java;

import java.util.*;

class SpiralMatrix {
    public List<Integer> spiralOrder(int[][] matrix) {
        int n=matrix.length;
        int m=matrix[0].length;
        int top=0;
        int buttom=n-1;
        int right=m-1;   
        int left=0;
        List<Integer> res=new ArrayList<>();
        while(top <=buttom && left<=right)
        {
            for(int i=left;i<=right;i++)
            {
                res.add(matrix[top][i]);   
            }
            top++;
            for(int i=top;i<=buttom;i++)
            {
                res.add(matrix[i][right]);
            }
            right--;
            if(top<=buttom)
            {
                for(int i=right;i>=left;i--)
                {
                    res.add(matrix[buttom][i]);
                }
                buttom--;
            }
            if(left<=right )
            {
                for(int i=buttom; i>=top; i--)
                {
                    res.add(matrix[i][left]);
                }
                left++;
            }
        }
        return res;
    }
}