import java.util.*;
class LargestSubmatrixWithRearrangements {
    public int largestSubmatrix(int[][] matrix) {
        int n=matrix.length;
        int m=matrix[0].length;
        for(int i=1;i<n;i++)
        {
            for(int j=0;j<m;j++)
            {
                if(matrix[i][j] == 1)
                {
                    matrix[i][j]=matrix[i-1][j]+1;
                }
            }
        }
        int ans=0;
        for(var row:matrix)
        {
            Arrays.sort(row);
            for(int i=m-1,k=1;i>=0 && row[i] >0;i--,k++)
            {
                int s=row[i]*k;
                ans=Math.max(ans,s);
            }
        }
        return ans;
    }
}